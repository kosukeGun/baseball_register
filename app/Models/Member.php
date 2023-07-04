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
        'user_id',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getByuser()
    {
        $user = \Auth::user();
        return $this->where("user_id", $user->id)->get();
    }
}
