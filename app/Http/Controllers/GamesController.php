<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Tournament;
use App\Models\Member;
use App\Models\Score;
use App\Models\Result;

class GamesController extends Controller
{
    public function index(Game $game)
    {
        return view("games/index")->with(['games' => $game->getByuser()]);
    }

    public function show(Game $game)
    {
        $results_old = Result::where("game_id", $game->id)->get();
        $memberIDs = [];
        foreach($results_old as $result)
        {
            $memberIDs[] = $result->member->id;
        }
        $memberIDs = array_unique($memberIDs);
        $results = [];
        foreach($memberIDs as $memberID)
        {
            $results[] = Result::where("game_id", $game->id)->where("member_id", $memberID)->get();
        }
        
        return view("games/show")->with(['game' => $game, 'results' => $results]);
    }

    public function create(Tournament $tournament)
    {
        $user = \Auth::user();
        $date = strtotime('+9 hour');
        return view("games/create")->with(["user" => $user, "tournaments" => $tournament->get(), "date" => $date]);
    }

    public function store(Request $request, Game $game)
    {
        $input = $request["game"];
        $game->fill($input)->save();
        return redirect("/games/create/".$game->id);
    }

    public function start(Game $game, Member $member, Score $score)
    {
        $user = \Auth::user();
        return view("games/register")->with(["user" => $user, "game" => $game, "members" => $member->getByuser(), "scores" => $score->get()]);
    }

    public function register(Request $request, Result $result)
    {
        $input = $request["result"];
        $game_id = $input["game_id"];
        $result->fill($input)->save();
        return redirect("/games/create/".$game_id);
    }
}
