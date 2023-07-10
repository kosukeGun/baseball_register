<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Grade;
use App\Models\Type;
use App\Models\Result;

class MembersController extends Controller
{
    public function index(Member $member)
    {
        return view("members/index")->with(['members' => $member->getByuser()]);
    }

    public function show(Member $member)
    {
        $result = [];
        for($i = 0; $i < 5; $i++)
        {
            $result[$i] = Result::where("member_id", $member->id)->whereHas('score', function($query) use($i){
                $query->where('status',$i + 1);
            })->get();
        }
        $result_HR = Result::where("member_id", $member->id)->whereHas('score', function($query){
            $query->where('name', 'HR');
        })->get();
        $my_results = Result::where("member_id", $member->id)->get();
        $rbi = 0;
        foreach($my_results as $my_result)
        {
            $rbi += $my_result->rbi;
        }
        return view("members/show")->with(['member' => $member, "results" => $result, "result_HR" => $result_HR, "rbi" => $rbi]);
    }

    public function create(Grade $grade, Type $type)
    {
        $user = \Auth::user();
        return view("members/create")->with(['user' => $user, 'grades' => $grade->get(), 'types' => $type->get()]);
    }

    public function store(Request $request, Member $member)
    {
        $input = $request["member"];
        $member->fill($input)->save();
        return redirect('/datas/'.$member->id);
    }

    public function edit(Member $member, Grade $grade, Type $type)
    {
        return view('members/edit')->with(['member' => $member, 'grades' => $grade->get(), 'types' => $type->get()]);
    }

    public function update(Request $request, Member $member)
    {
        $input = $request["member"];
        $member->fill($input)->save();
        return redirect('/datas/'.$member->id);
    }

    public function destroy(Member $member)
    {
        $member->delete();
        return redirect('/datas');
    }
}
