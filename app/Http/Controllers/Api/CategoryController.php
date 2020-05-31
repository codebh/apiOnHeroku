<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use mysql_xdevapi\Collection;

class CategoryController extends Controller
{
    public function index(){
        return   CategoryResource::collection(Category::paginate());
//        return Category::all();
//        return response()
    }
   }
