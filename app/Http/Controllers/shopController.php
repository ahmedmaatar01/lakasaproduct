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
        
        // Get selected category IDs from the request (this should be an array)
        $selectedCategories = $request->input('categories', []);
    
        // Handle forme and led as individual string values
        $forme = $request->input('forme');  // Single string, not an array
        $led = $request->input('led');      // Single string or integer, not an array
    
        // Build query for products
        $query = Product::with('featuredImage', 'category');
    
        // Search by name
        if ($request->has('shop_search') && $request->shop_search) {
            $searchTerm = $request->shop_search;
            $query->where('name', 'LIKE', '%' . $searchTerm . '%');
        }
    
        // Filter by selected categories
        if (!empty($selectedCategories)) {
            $query->whereIn('category_id', $selectedCategories);
        }
    
        // Filter by forme if provided
        if ($forme) {
            $query->where('forme', $forme);
        }
    
        // Filter by led if provided
        if ($led) {
            $query->where('led', $led);
        }
    
        // Paginate results
        $products = $query->paginate(9);
    
        return view('shop.shop-list', compact('products', 'categories', 'selectedCategories'));
    }
    
    
}
