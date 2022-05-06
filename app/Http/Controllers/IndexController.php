<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // return Member::with('getGroup')->get();
        return Member::find(1)->getGroup;
    }
}
