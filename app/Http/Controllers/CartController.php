<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $total_price = 0;
        $cart = session()->get('cart', []);
        // Fetch product names for each cart item
        foreach ($cart as $id => &$details) {
            $total_price += $details['price'] * $details['quantity'];
            $product = Product::with('featuredImage',)->findOrFail($details["product_id"]);
            if ($product) {
                $details['name'] = $product->name;
                $details['img'] = $product->featuredImage->image_path;
            } else {
                $details['name'] = 'Product not found';
            }
        }

        return view('cart.index', compact('cart', 'total_price'));
    }

    public function add(Request $request)
    {
        $cart = session()->get('cart', []);

        $cart[] = [
            'product_id' => $request->input('product_id'),
            'langeur' => $request->input('langeur'),
            'largeur' => $request->input('largeur'),
            'cadre' => $request->input('cadre'),
            'led' => $request->input('led'),
            'mirroir' => $request->input('mirroir'),
            'couleur_cadre' => $request->input('couleur_cadre'),
            'interrepteur' => $request->input('interrepteur'),
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price')
        ];

        session()->put('cart', $cart);

        return response()->json(['message' => 'Product added to cart successfully!']);
    }
    public function remove(Request $request)
    {
        $cart = session()->get('cart', []);

        // Find the item in the cart and remove it
        foreach ($cart as $index => $details) {
            if ($details['product_id'] == $request->input('product_id')) {
                unset($cart[$index]);
                break;
            }
        }

        // Re-index the array
        $cart = array_values($cart);

        session()->put('cart', $cart);

        return response()->json(['status' => 'success']);
    }
}
