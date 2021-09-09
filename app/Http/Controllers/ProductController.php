<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{


    public function showProducts(){

        $products =Product::get();
        return view('product.show-products',compact('products'));


    }
}
