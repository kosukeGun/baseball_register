<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "rbi",
        "score_id",
        "member_id",
        "game_id",
    ];

    public function score()
    {
        return $this->belongsTo(Score::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
