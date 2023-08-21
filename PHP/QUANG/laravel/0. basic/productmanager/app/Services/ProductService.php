<?php

namespace App\Services;
use Illuminate\Support\Facades\DB;

class ProductService{
    function findAll(){
        $products = DB::table('products')->get();
        return $products;
    }
}

?>