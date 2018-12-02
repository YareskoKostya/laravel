<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{

    public function index()
    {
        if (auth()->check()) {
            $members = Member::all();
        } else {
            $members = Member::where('visible', true)->get();
        }

        return view('members.index', [
            'members' => $members,
        ]);
    }
}
