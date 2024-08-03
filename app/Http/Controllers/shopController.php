<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        
        // Get selected category IDs from the request
        $selectedCategories = $request->input('categories', []);

        // Build query for products
        $query = Product::with('featuredImage', 'category');
        if ($request->has('shop_search') && $request->shop_search) {
            $searchTerm = $request->shop_search;
            $query->where('name', 'LIKE', '%' . $searchTerm . '%');
        }
        // Filter by selected categories
        if (!empty($selectedCategories)) {
            $query->whereIn('category_id', $selectedCategories);
        }
        // Paginate results
        $products = $query->paginate(9); 

        return view('shop.shop-list', compact('products', 'categories','selectedCategories'));
    }
}