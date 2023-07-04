<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Tournament;
use App\Models\Member;

class GamesController extends Controller
{
    public function index(Game $game)
    {
        return view("games/index")->with(['games' => $game->getByuser()]);
    }

    public function show(Game $game)
    {
        return view("games/show")->with(['game' => $game]);
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

    public function start(Game $game, Member $member)
    {
        $user = \Auth::user();
        return view("games/register")->with(["user" => $user, "game" => $game, "members" => $member->getByuser()]);
    }
}
