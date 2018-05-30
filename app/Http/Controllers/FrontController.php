<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontController extends Controller
{
    public function index()
    {
    	$clothes=Product::all();
    	return view('front.home',compact('clothes'));
    }

    public function clothes(){
        
        $clothes=Product::all();
    	return view('front.clothes',compact('clothes'));
    }

    public function singlecloth(){

    	return view('front.singlecloth');
    }
}
