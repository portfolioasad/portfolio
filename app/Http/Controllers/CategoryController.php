<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;

class CategoryController extends Controller
{
    function category(){
        return view('category/home');
    }


    function categorypost(Request $request){
            print_r( $request->category_name); 
                Category::insert([
                    'category_name' => $request->category_name,
                       'created_at' => Carbon::now(),
                        'updated_at' =>Carbon::now(),
                ]);

            
            $request->validate([
                  'category_name' => 'required|max:20|min:2',
                ]);
                return  view('category/categorypost');
    }


}
