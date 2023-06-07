<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MembersController extends Controller
{
    public function index(Member $member)
    {
        return view("members/index")->with(['members' => $member->get()]);
    }
}
