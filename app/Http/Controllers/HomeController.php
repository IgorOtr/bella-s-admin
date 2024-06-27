<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductControllerController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function listProducts(ProductController $product)
    {
        $products = $product->listProducts();
        return view('list_products', compact('products'));
    }
}
