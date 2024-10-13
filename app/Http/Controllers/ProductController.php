<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('featuredImage', 'category')->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $details = ProductDetail::all();
        return view('products.create', compact('categories','details'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'prix_metre_carre' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'product_details_id' => 'required',
            'image_avant' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->prix_metre_carre = $request->prix_metre_carre;
        $product->category_id = $request->category_id;
        $product->product_details_id = $request->product_details_id;
        $product->description = $request->description;
        $product->interrepteur = $request->has('interrepteur') ? 1 : 0;
        $product->led = $request->has('led') ? 1 : 0;

        $product->save();

        $img_en_avant = $request->file('image_avant');
        $img_av_path = $img_en_avant->store('images', 'public');
        ProductImage::create([
            'product_id' => $product->id,
            'image_path' => $img_av_path,
            'featured' => 1,
        ]);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('images', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path,
                ]);
            }
        }

        return response()->json([
            'status' => 'success',
            'message' => 'product created successfully.',
        ]);
    }
    public function edit(Product $product)
    {
        $categories = Category::all();
        $details = ProductDetail::all();
        return view('products.edit', compact('product', 'categories','details'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'prix_metre_carre' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'product_details_id' => 'required',
            'image_avant' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        $product = Product::findOrFail($id);

        if ($request->hasFile('image_avant')) {
            // Delete old featured image if exists
            if ($product->featuredImage) {
                Storage::disk('public')->delete($product->featuredImage->image_path);
                $product->featuredImage->delete();
            }
            // Save new featured image
            $img_en_avant = $request->file('image_avant');
            $img_av_path = $img_en_avant->store('images', 'public');
            ProductImage::create([
                'product_id' => $product->id,
                'image_path' => $img_av_path,
                'featured' => 1,
            ]);
        }

        if ($request->hasFile('images')) {
            // Delete old images
            foreach ($product->images as $image) {
                Storage::disk('public')->delete($image->image_path);
                $image->delete();
            }

            // Save new images
            foreach ($request->file('images') as $image) {
                $path = $image->store('images', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path,
                ]);
            }
        }

        $product->name = $request->name;
        $product->prix_metre_carre = $request->prix_metre_carre;
        $product->category_id = $request->category_id;
        $product->product_details_id = $request->product_details_id;
        $product->description = $request->description;
        $product->interrepteur = $request->has('interrepteur') ? 1 : 0;
        $product->led = $request->has('led') ? 1 : 0;

        $product->save();
        return response()->json([
            'status' => 'success',
            'message' => 'Product updated successfully.',
        ]);
    }

    public function destroy(Product $product)
    {
        if ($product->featuredImage) {
            Storage::disk('public')->delete($product->featuredImage->image_path);
            $product->featuredImage->delete();
        }
        $product->delete();
        foreach ($product->images as $image) {
            Storage::disk('public')->delete($image->image_path);
            $image->delete();
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Product deleted successfully.',
        ]);
    }
}
