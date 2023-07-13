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

    public function getCount($member_id, $game_id)
    {
        return $this->where("member_id", $member_id)->where("game_id", $game_id)->whereHas("score", function($query){
            $query->where("status", 1)->orWhere("status", 2)->orWhere("status", 4)->orWhere("status", 5);
        })->get()->count();
    }

    public function getHitCount($member_id, $game_id)
    {
        return $this->where("member_id", $member_id)->where("game_id", $game_id)->whereHas("score", function($query){
            $query->where("status", 1);
        })->get()->count();
    }

    public function getHitAverage($member_id, $game_id)
    {
        $hit_count = $this->where("member_id", $member_id)->where("game_id", $game_id)->whereHas("score", function($query){
            $query->where("status", 1);
        })->get()->count();

        $count = $this->where("member_id", $member_id)->where("game_id", $game_id)->whereHas("score", function($query){
            $query->where("status", 1)->orWhere("status", 2)->orWhere("status", 4)->orWhere("status", 5);
        })->get()->count();
        return sprintf('%.3f', $hit_count/$count);
    }
}
