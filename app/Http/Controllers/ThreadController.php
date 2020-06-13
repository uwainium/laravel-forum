<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $category_id = $request->input('parent');
        $all = $category_id == null;
        if ($category_id == 0) $category_id = null;

        $limit = $request->input('limit', 10);
        $offset = $request->input('offset', 0);

        return response()->json(
            \App\Thread::query()
                ->where('category_id', $category_id)
                ->when($all, function($query) {
                    return $query->orWhereRaw('1 = 1');
                })
                ->offset($offset)
                ->take($limit)
                ->get()->each(function($thread) {
                    $thread->created = $thread->created_at->diffForHumans();
                    $thread->updated = $thread->updated_at->diffForHumans();
                })
                ->toJson()
        );
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
     * @param  \App\Thread $thread
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(\App\Thread $thread)
    {
        $thread->created = $thread->created_at->diffForHumans();
        unset($thread->created_at);
        $thread->updated = $thread->updated_at->diffForHumans();
        unset($thread->updated_at);

        return response()->json($thread->toJson());
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
