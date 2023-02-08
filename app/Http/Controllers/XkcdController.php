<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

class XkcdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ajax = Http::get("https://xkcd.com/info.0.json");
        if( $ajax->ok() )
        {
            return response( get_response("ok", $ajax->json()), 200 );
        }
        return response( get_response("Error: Service Unavailable", null), 503 );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response( get_response("Error: Method Not Allowed", null), 405 );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if( $id == "404" )
        {
            return response( get_response("Error: Not Found", null), 404 );
        }
        $url = "https://xkcd.com/" . $id . "/info.0.json";
        $ajax = Http::get($url);
        if( $ajax->ok() )
        {
            return response( get_response("ok", $ajax->json()), 200 );
        }
        return redirect()->action([XkcdController::class, "index"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return response( get_response("Error: Method Not Allowed", null), 405 );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response( get_response("Error: Method Not Allowed", null), 405 );
    }
}
