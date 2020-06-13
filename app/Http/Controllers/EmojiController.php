<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmojiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum')->only([
            'store',
            'update',
            'destroy'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(\App\Emoji::all()->toJson());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Emoji $emoji
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(\App\Emoji $emoji)
    {
        return response()->json($emoji->toJson());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Emoji $emoji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, \App\Emoji $emoji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Emoji $emoji
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Emoji $emoji)
    {
        $emoji->delete();
    }
}
