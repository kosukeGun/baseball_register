<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_first',
        'name_last',
        'mail',
        'type_id',
        'grade_id',
        'owner_id',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function getByOwner()
    {
        $owner = \Auth::user();
        return $this->where("owner_id", $owner->id)->get();
    }
}
