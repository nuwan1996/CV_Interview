<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAllProduct(){
        $product = DB::table('product')->get();
        return view('free_issue', compact('product'));
    }
}
