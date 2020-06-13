<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowController extends Controller
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
        return response()->json(\App\Follow::all()->toJson());
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
     * @param  \App\Follow $follow
     * @return \Illuminate\Http\Response
     */
    public function show(\App\Follow $follow)
    {
        return response()->json($follow->toJson());
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Follow $follow
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Follow $follow)
    {
        $follow->delete();
    }
}
