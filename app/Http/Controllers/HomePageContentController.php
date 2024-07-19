<?php

namespace App\Http\Controllers;

use App\Models\HomePageContent;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomePageContentController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->take(3)->with('featuredImage')->get();
        $content = HomePageContent::first();
        return view('homePage.index', compact('content','products'));
    }
    public function edit()
    {
        $content = HomePageContent::first();
        return view('homePage.edit', compact('content'));
    }

    public function update(Request $request)
    {
        $request->validate([
            // Validate the slider images, titles, and descriptions
            'slider_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'slider_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'slider_image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'slider_title_1' => 'nullable|string|max:255',
            'slider_title_2' => 'nullable|string|max:255',
            'slider_title_3' => 'nullable|string|max:255',
            'slider_description_1' => 'nullable|string|max:1000',
            'slider_description_2' => 'nullable|string|max:1000',
            'slider_description_3' => 'nullable|string|max:1000',
            // Validate labeled images and labels
            'image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'label_1' => 'nullable|string|max:255',
            'label_2' => 'nullable|string|max:255',
            'label_3' => 'nullable|string|max:255',
            'label_4' => 'nullable|string|max:255',
            // Validate sections
            'section_title_1' => 'nullable|string|max:255',
            'section_title_2' => 'nullable|string|max:255',
            'section_title_3' => 'nullable|string|max:255',
            'section_paragraph_1' => 'nullable|string|max:1000',
            'section_paragraph_2' => 'nullable|string|max:1000',
            'section_paragraph_3' => 'nullable|string|max:1000',
            'section_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'section_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'section_image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            // Validate Instagram posts
            'instagram_posts' => 'nullable|string',
        ]);


    // Debug: Log the request data
    Log::info($request->all());

    $content = HomePageContent::firstOrNew();

    // Handle slider images, titles, and descriptions
    for ($i = 1; $i <= 3; $i++) {
        if ($request->hasFile("slider_image_$i")) {
            $path = $request->file("slider_image_$i")->store('slider_images', 'public');
            $content->{"slider_image_$i"} = $path;
        }
        $content->{"slider_title_$i"} = $request->input("slider_title_$i");
        $content->{"slider_description_$i"} = $request->input("slider_description_$i");
    }

    // Handle labeled images and labels
    for ($i = 1; $i <= 4; $i++) {
        if ($request->hasFile("image_$i")) {
            $path = $request->file("image_$i")->store('labeled_images', 'public');
            $content->{"image_$i"} = $path;
        }
        $content->{"label_$i"} = $request->input("label_$i");
    }

    // Handle sections
    for ($i = 1; $i <= 3; $i++) {
        $content->{"section_title_$i"} = $request->input("section_title_$i");
        $content->{"section_paragraph_$i"} = $request->input("section_paragraph_$i");
        if ($request->hasFile("section_image_$i")) {
            $path = $request->file("section_image_$i")->store('section_images', 'public');
            $content->{"section_image_$i"} = $path;
        }
    }

    // Handle Instagram posts
    $content->instagram_posts = $request->input('instagram_posts');

    // Save the content
    $content->save();

    // Debug: Log the saved content
    Log::info($content);


        return redirect()->back()->with('success', 'Home page content updated successfully!');
    }
}
