<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Member;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // return Member::with('getGroup')->get();
        return Member::with('group')->get();
    }
    public function group(Group $group)
    {
        return Group::get();
        return Group::with('member')->get();
        return $group;
    }
}
