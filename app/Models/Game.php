<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        "tournament_id",
        "user_id",
        "name",
        "date",
    ];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function getByuser()
    {
        $user = \Auth::user();
        return $this->where("user_id", $user->id)->get();
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
