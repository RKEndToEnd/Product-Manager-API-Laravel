<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function createProduct(Request $request)
    {
        $product = new Product;
        $product->product_name = $request->input('product_name');
        $product->product_category = $request->input('product_category');
        $product->product_description = $request->input('product_description');
        $product->product_amount = $request->input('product_amount');
        $product->image_path = $request->file('file')->store('products');
        $product->save();
        return $product;
    }

    function listProduct()
    {
        return Product::all();
    }
}
