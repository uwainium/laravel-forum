<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateMetaController extends Controller
{
    /*
     *
     */
    public function createMeta($type) {


        switch($type) {
            case 'category':
                return $this->category();
            break;
            case 'post':
                return $this->post();
            break;
            default:
            break;
        }
    }

    private function category() {
        $category = new Category();
        $meta = array();
        foreach ($category->getFillable() as $key => $value) {
            $meta[$value] = DB::connection()->getSchemaBuilder()->getColumnType('categories', $value);
        }

        return response()->json(json_encode($meta));
    }

    private function post() {
        $post = new Post();
        $meta = array();
        foreach ($post->getFillable() as $key => $value) {
            $meta[$value] = DB::connection()->getSchemaBuilder()->getColumnType('posts', $value);
        }

        return response()->json(json_encode($meta));
    }
}
