<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
            return response( array( "message" => "ok", "response" => $ajax->json() ), 200 );
        }
        return response( array("message" => "Error: Service Unavailable", "response" => null), 503 );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response( array("message" => "Error: Method Not Allowed", "response" => null), 405 );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $url = "https://xkcd.com/" . $id . "/info.0.json";
        $ajax = Http::get($url);
        if( $ajax->ok() )
        {
            return response( array( "message" => "ok", "response" => $ajax->json() ), 200 );
        }
        // DLLM
        // @see <https://stackoverflow.com/a/17861505>
        return $this->index();
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
        return response( array("message" => "Error: Method Not Allowed", "response" => null), 405 );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response( array("message" => "Error: Method Not Allowed", "response" => null), 405 );
    }
}
