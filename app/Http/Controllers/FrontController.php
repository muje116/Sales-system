<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        #dd(Product::all());
        return view('index', ['products' => Product::paginate(3)]);
    }

    public function singleProduct($id)
    {
      return view('single', ['product' =>Product::find($id)]);
    }
}
