<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = ProductDetail::all();
        return view('products-detail.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $details = ProductDetail::all();

        return view('products-detail.create', compact('details'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'section_image_1' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'section_image_2' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'section_image_3' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $productDetail = new ProductDetail();
        $productDetail->name = $validatedData['name'];

        // Save other optional fields if provided
        if ($request->has('title_1')) {
            $productDetail->title_1 = $request->input('title_1');
        }
        if ($request->has('description_1')) {
            $productDetail->description_1 = $request->input('description_1');
        }

        //section 1
        if ($request->has('section_title_1')) {
            $productDetail->section_title_1 = $request->input('section_title_1');
        }
        if ($request->has('section_paragraph_1')) {
            $productDetail->section_paragraph_1 = $request->input('section_paragraph_1');
        }
        // Handle file uploads for image
        if ($request->hasFile('section_image_1')) {
            $productDetail->section_image_1 = $request->file('section_image_1')->store('section_images', 'public');
        }

        //section 2
        if ($request->has('section_title_2')) {
            $productDetail->section_title_2 = $request->input('section_title_2');
        }
        if ($request->has('section_paragraph_2')) {
            $productDetail->section_paragraph_2 = $request->input('section_paragraph_2');
        }
        if ($request->hasFile('section_image_2')) {
            $productDetail->section_image_2 = $request->file('section_image_2')->store('section_images', 'public');
        }

        //section 2
        if ($request->has('section_title_2')) {
            $productDetail->section_title_2 = $request->input('section_title_2');
        }
        if ($request->has('section_paragraph_2')) {
            $productDetail->section_paragraph_2 = $request->input('section_paragraph_2');
        }
        if ($request->hasFile('section_image_2')) {
            $productDetail->section_image_2 = $request->file('section_image_2')->store('section_images', 'public');
        }
        //section 3
        if ($request->has('section_title_3')) {
            $productDetail->section_title_3 = $request->input('section_title_3');
        }
        if ($request->has('section_paragraph_3')) {
            $productDetail->section_paragraph_3 = $request->input('section_paragraph_3');
        }
        if ($request->hasFile('section_image_3')) {
            $productDetail->section_image_3 = $request->file('section_image_3')->store('section_images', 'public');
        }
        //section4
        if ($request->hasFile('lumiere_img1')) {
            $productDetail->lumiere_img1 = $request->file('lumiere_img1')->store('section_images', 'public');
        }
        if ($request->has('lumiere_desc1')) {
            $productDetail->lumiere_desc1 = $request->input('lumiere_desc1');
        }

        if ($request->hasFile('lumiere_img2')) {
            $productDetail->lumiere_img2 = $request->file('lumiere_img2')->store('section_images', 'public');
        }
        if ($request->has('lumiere_desc2')) {
            $productDetail->lumiere_desc2 = $request->input('lumiere_desc2');
        }

        if ($request->hasFile('lumiere_img3')) {
            $productDetail->lumiere_img3 = $request->file('lumiere_img3')->store('section_images', 'public');
        }
        if ($request->has('lumiere_desc3')) {
            $productDetail->lumiere_desc3 = $request->input('lumiere_desc3');
        }
        //section5
        if ($request->has('parg_section5')) {
            $productDetail->parg_section5 = $request->input('parg_section5');
        }
        if ($request->has('titre_section_5')) {
            $productDetail->titre_section_5 = $request->input('titre_section_5');
        }
        if ($request->has('parg1_section_5')) {
            $productDetail->parg1_section_5 = $request->input('parg1_section_5');
        }
        if ($request->hasFile('img1_section_5')) {
            $productDetail->img1_section_5 = $request->file('img1_section_5')->store('section_images', 'public');
        }

        if ($request->has('parg2_section_5')) {
            $productDetail->parg2_section_5 = $request->input('parg2_section_5');
        }
        if ($request->hasFile('img2_section_5')) {
            $productDetail->img2_section_5 = $request->file('img2_section_5')->store('section_images', 'public');
        }
        //section 6
        if ($request->has('titre_section_6')) {
            $productDetail->titre_section_6 = $request->input('titre_section_6');
        }
        if ($request->has('parg1_section_6')) {
            $productDetail->parg1_section_6 = $request->input('parg1_section_6');
        }
        if ($request->hasFile('img2_section_6')) {
            $productDetail->img2_section_6 = $request->file('img2_section_6')->store('section_images', 'public');
        }
        //section 7
        if ($request->has('titre_section_7')) {
            $productDetail->titre_section_7 = $request->input('titre_section_7');
        }
        if ($request->has('parg1_section_7')) {
            $productDetail->parg1_section_7 = $request->input('parg1_section_7');
        }
        if ($request->hasFile('img2_section_7')) {
            $productDetail->img2_section_7 = $request->file('img2_section_7')->store('section_images', 'public');
        }


        $productDetail->save();

        return response()->json(['status' => 'success', 'message' => 'Product detail saved successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detail = ProductDetail::findOrFail($id);

        return view('products-detail.edit', compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'section_image_1' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'section_image_2' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'section_image_3' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $productDetail = ProductDetail::findOrFail($id);
        $productDetail->name = $validatedData['name'];

        // Save other optional fields if provided
        if ($request->has('title_1')) {
            $productDetail->title_1 = $request->input('title_1');
        }
        if ($request->has('description_1')) {
            $productDetail->description_1 = $request->input('description_1');
        }

        //section 1
        if ($request->has('section_title_1')) {
            $productDetail->section_title_1 = $request->input('section_title_1');
        }
        if ($request->has('section_paragraph_1')) {
            $productDetail->section_paragraph_1 = $request->input('section_paragraph_1');
        }
        // Handle file uploads for image
        if ($request->hasFile('section_image_1')) {
            $productDetail->section_image_1 = $request->file('section_image_1')->store('section_images', 'public');
        }

        //section 2
        if ($request->has('section_title_2')) {
            $productDetail->section_title_2 = $request->input('section_title_2');
        }
        if ($request->has('section_paragraph_2')) {
            $productDetail->section_paragraph_2 = $request->input('section_paragraph_2');
        }
        if ($request->hasFile('section_image_2')) {
            $productDetail->section_image_2 = $request->file('section_image_2')->store('section_images', 'public');
        }
        //section 3
        if ($request->has('section_title_3')) {
            $productDetail->section_title_3 = $request->input('section_title_3');
        }
        if ($request->has('section_paragraph_3')) {
            $productDetail->section_paragraph_3 = $request->input('section_paragraph_3');
        }
        if ($request->hasFile('section_image_3')) {
            $productDetail->section_image_3 = $request->file('section_image_3')->store('section_images', 'public');
        }
        //section4
        if ($request->hasFile('lumiere_img1')) {
            $productDetail->lumiere_img1 = $request->file('lumiere_img1')->store('section_images', 'public');
        }
        if ($request->has('lumiere_desc1')) {
            $productDetail->lumiere_desc1 = $request->input('lumiere_desc1');
        }

        if ($request->hasFile('lumiere_img2')) {
            $productDetail->lumiere_img2 = $request->file('lumiere_img2')->store('section_images', 'public');
        }
        if ($request->has('lumiere_desc2')) {
            $productDetail->lumiere_desc2 = $request->input('lumiere_desc2');
        }

        if ($request->hasFile('lumiere_img3')) {
            $productDetail->lumiere_img3 = $request->file('lumiere_img3')->store('section_images', 'public');
        }
        if ($request->has('lumiere_desc3')) {
            $productDetail->lumiere_desc3 = $request->input('lumiere_desc3');
        }
        //section5
        if ($request->has('parg_section5')) {
            $productDetail->parg_section5 = $request->input('parg_section5');
        }
        if ($request->has('titre_section_5')) {
            $productDetail->titre_section_5 = $request->input('titre_section_5');
        }
        if ($request->has('parg1_section_5')) {
            $productDetail->parg1_section_5 = $request->input('parg1_section_5');
        }
        if ($request->hasFile('img1_section_5')) {
            $productDetail->img1_section_5 = $request->file('img1_section_5')->store('section_images', 'public');
        }

        if ($request->has('parg2_section_5')) {
            $productDetail->parg2_section_5 = $request->input('parg2_section_5');
        }
        if ($request->hasFile('img2_section_5')) {
            $productDetail->img2_section_5 = $request->file('img2_section_5')->store('section_images', 'public');
        }
        //section 6
        if ($request->has('titre_section_6')) {
            $productDetail->titre_section_6 = $request->input('titre_section_6');
        }
        if ($request->has('parg1_section_6')) {
            $productDetail->parg1_section_6 = $request->input('parg1_section_6');
        }
        if ($request->hasFile('img2_section_6')) {
            $productDetail->img2_section_6 = $request->file('img2_section_6')->store('section_images', 'public');
        }
        //section 7
        if ($request->has('titre_section_7')) {
            $productDetail->titre_section_7 = $request->input('titre_section_7');
        }
        if ($request->has('parg1_section_7')) {
            $productDetail->parg1_section_7 = $request->input('parg1_section_7');
        }
        if ($request->hasFile('img2_section_7')) {
            $productDetail->img2_section_7 = $request->file('img2_section_7')->store('section_images', 'public');
        }

        $productDetail->save();

        return response()->json(['status' => 'success', 'message' => 'Product detail saved successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detail = ProductDetail::find($id);
        $detail->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Product deleted successfully.',
        ]);
    }
}
