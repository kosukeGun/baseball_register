<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function getByOwner()
    {
        $owner = \Auth::user();
        return $this->where("owner_id", $owner->id)->get();
    }
}
