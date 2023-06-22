<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class categorycontroller extends Controller
{
            public function categories()

                    {

                         return view('backend.pages.category.category');
                
                
                    }

 //............................................................................

                    
            public function create()

            {

                 return view('backend.pages.category.category_create');
        
        
            }

 //............................................................................

         
 public function store(request $request)

 {

        Category::create (['name'=>$request->name,
    'description'=>$request->description]);

      return redirect()->route('categories');


 }


}
