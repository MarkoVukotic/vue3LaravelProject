<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        try {

            return PostResource::collection(Post::paginate(10));

        } catch (\Exception $exception){
            echo $exception->getLine();
            echo $exception->getMessage();
        }
    }
}
