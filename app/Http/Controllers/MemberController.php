<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Member;

/**
 * Get standard response format.
 * @param string $message
 * @param null|array $content
 * @return array
 */
function get_response($message = "No content", $content = null)
{
    return array("message" => $message, "content" => $content);
}

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
        return response( get_response("ok", $users), 200 );
    }
}
