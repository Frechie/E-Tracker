<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Categories\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()  {
            $category = Category::all();
            
            //return $category;
    
            return view('category.category')->with('cat_model', $category);
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()  {
            return view('category.add-category');
            
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request) {
    
            $cat = Category::create([
                'category_name' => $request->input('cat_name'),
                'category_description' => $request->input('cat_desc'),
                'cat_created_by_uid' => $request->user()->email
                ]);
                
                return redirect('categories')
                        ->with('newCategoryMessage', 'Successfully created '.$request->input('cat_name').' Category!!!');
            //
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id){

        $data = Category::find($id);

        return view('category.delete-category')->with('deleteCategory', $data);
        
           
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id){
    
            $data = Category::find($id);
    
            return view('category.edit-category')->with('categoryToUpdate', $data);
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)  {
    
            $catToUpdate = Category::find($id);
    
            $catToUpdate->category_name = $request->input('cat_name');
            $catToUpdate->category_description = $request->input('cat_desc');
            //$catToUpdate->cat_created_by_uid = $request->user()->id;
    
            $catToUpdate->save();
    
            return redirect('categories')
                    ->with('successMessage', 'Successfully Updated '.$catToUpdate->category_name.'!!! ');  
            //
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id) {
            $catTodelete = Category::find($id);
    
            $catTodelete->delete();
    
            return redirect('categories')->with('deletionMessage', 'Successfully deleted '.$catTodelete->category_name);
    
          
        }
    }
    