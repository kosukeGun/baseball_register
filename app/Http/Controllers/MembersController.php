<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Grade;
use App\Models\Type;

class MembersController extends Controller
{
    public function index(Member $member)
    {
        return view("members/index")->with(['members' => $member->get()]);
    }

    public function show(Member $member)
    {
        return view("members/show")->with(['member' => $member]);
    }

    public function create(Grade $grade, Type $type)
    {
        $owner = \Auth::user();
        return view("members/create")->with(['owner' => $owner, 'grades' => $grade->get(), 'types' => $type->get()]);
    }

    public function store(Request $request)
    {
        
    }
}
