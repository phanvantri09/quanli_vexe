<?php

namespace App\Http\Controllers;

use App\Models\categoryModel;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       
         $category = categoryModel::all();
        
        return view('layouts.pages.home', compact('category'));
    }
   public function list()
   {
       $category = categoryModel::all();
       return view('layouts.pages.List', compact('category'));
   }
  
}
