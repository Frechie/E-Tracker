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
            'cat_created_by_uid' => $request->user()->email
            ]);
            
            return redirect('categories')->with('newCategoryMessage', 'Successfully created '.$request->input('cat_name'));           
    }


    public function showCatUpdateForm(Request $request){
        
        $data = Category::find($request->id);

        return view('category.edit-category')->with('categoryToUpdate', $data);

    }
    
    public function updateCategory(Request $request){

        $catToUpdate = Category::find($request->id);

        $catToUpdate->category_name = $request->input('cat_name');
        $catToUpdate->category_description = $request->input('cat_desc');
        //$catToUpdate->cat_created_by_uid = $request->user()->id;

        $catToUpdate->save();

        return redirect('categories')->with('successMessage', 'Successfully Updated '.$catToUpdate->category_name);  
    }

    public function showDeletionteForm(Request $request){

        $data = Category::find($request->id);

        return view('category.delete-category')->with('deleteCategory', $data);
    }

    public function deleteCategory(Request $request){

        $catTodelete = Category::find($request->id);

        $catTodelete->delete();

        return redirect('categories')->with('deletionMessage', 'Successfully deleted '.$catTodelete->category_name);

    }
    
}
