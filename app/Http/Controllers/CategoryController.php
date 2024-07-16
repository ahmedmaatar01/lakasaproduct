<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // Afficher le formulaire de création de catégorie
    public function create()
    {
        return view('categories.create');
    }

    // Enregistrer une nouvelle catégorie
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::create($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Category created successfully.',
            'category' => $category, // Optionally, you can send back the created category data
        ]);    }

    // Afficher une catégorie spécifique
    public function show(Category $category)
    {
        // return view('categories.show', compact('category'));
    }

    // Afficher le formulaire d'édition d'une catégorie
    public function edit(string $id)
    {
        $category = category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    // Mettre à jour une catégorie
    public function update(Request $request, string $id)
    {
        $category =category::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update($validated);

        return response()->json(['status' => 'success', 'message' => 'Category updated successfully.']);
    }

    // Supprimer une catégorie
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
    
        return response()->json(['status' => 'success', 'message' => 'Category deleted successfully.']);
    }
}