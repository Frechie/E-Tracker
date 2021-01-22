<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories\Category;

class CategoryController extends Controller {
    

    public function showCategory(){

        $category = Category::all();

        return view('category.category')->with('cat_model', $category);
    }

    public function showCatForm(){
        return view('category.add-category');
    }
    

    public function saveCategory (Request $request){

        $cat = Category::create([
            'category_name' => $request->input('cat_name'),
            'category_description' => $request->input('cat_desc'),
            'cat_created_by_uid' => $request->user()->id
            ]);
            
            return redirect('category');
           
    }


    

}
