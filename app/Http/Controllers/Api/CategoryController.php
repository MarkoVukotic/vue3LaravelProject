<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index(){
        try {

            return CategoryResource::collection(Category::all());

        }catch (\Exception $exception){
            echo $exception->getMessage();
            echo $exception->getLine();
        }
    }
}
