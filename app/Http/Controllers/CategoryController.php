<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
            \App\Category::query()
            ->where('category_id', $category_id)
            ->when($all, function($query) {
                return $query->orWhereRaw('1 = 1');
            })
            ->offset($offset)
            ->take($limit)
            ->get()->each(function($category) {
                $category->created = $category->created_at->diffForHumans();
                unset($category->created_at);
                $category->updated = $category->updated_at->diffForHumans();
                unset($category->updated_at);
                $category->threadCount = $category->threads()->count();
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
        if($request->filled(['title', 'description'])) {
            $category = new \App\Category();
            $category->title = $request->title;
            $category->description = $request->description;
            $category->category_id = $request->input('category_id', null);
            $category->user_id = Auth::id();
            $category->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(\App\Category $category)
    {
        $category->created = $category->created_at->diffForHumans();
        unset($category->created_at);
        $category->updated = $category->updated_at->diffForHumans();
        unset($category->updated_at);
        $category->threadCount = $category->threads()->count();

        return response()->json($category->toJson());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, \App\Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Category $category)
    {
        $category->delete();
    }
}
