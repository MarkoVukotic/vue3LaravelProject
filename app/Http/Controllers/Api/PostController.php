<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        try {

            $posts = Post::with('category')->paginate(10);
            return PostResource::collection($posts);

        } catch (\Exception $exception){
            echo $exception->getLine();
            echo $exception->getMessage();
        }
    }
}
