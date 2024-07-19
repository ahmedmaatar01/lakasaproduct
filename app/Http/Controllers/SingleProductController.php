<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function index(string $id)
    {
        $product_imgs= ProductImage::where("product_id",$id)->get();
        $product = Product::with('featuredImage', 'category')->findOrFail($id);
        return view('products.single-product', compact('product','product_imgs'));
    }


}
