<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @see <https://stackoverflow.com/a/51650270>
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Member::all();
        return response($users);
    }
}
