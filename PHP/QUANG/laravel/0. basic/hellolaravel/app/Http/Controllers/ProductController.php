<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function showProducts($id){

        return view('products.index', compact('id'));
    }
}
