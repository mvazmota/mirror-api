<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class Products extends Controller
{
    public function getProducts($id)
    {
        $products = Product::where('list_id', $id)
            ->get();

        $response = response($products)
            ->header('Content-Type', 'application/json');

        return $response;
    }

    public function createProducts(Request $request)
    {
        $product = new Product;

        $product->title = $request->title;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->list_id = $request->list_id;

        $product->save();

        $response = response($product)
            ->header('Content-Type', 'application/json');

        return $response;
    }
}
