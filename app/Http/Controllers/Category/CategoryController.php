<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories\Category;

class CategoryController extends Controller {
    

    public function index(){

        $count_n = Category::where('category_name', 1)->count();

        return view('category.category')->with('count', $count_n);
    }
}
