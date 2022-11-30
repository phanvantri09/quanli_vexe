<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NhaXeController extends Controller
{
    public function add(){
        return view('layouts.pages.nhaxe.add');
    }
}
