<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // Fetch all categories
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        // Retrieve all categories to show as parent options
        $categories = Category::all();

        // Return view for creating a new category
        return view('categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'title' => 'required|string',
            'sub_title' => 'nullable|string',
            'description' => 'nullable|string',
            'banner_image' => 'nullable|string',
            'slug' => 'required|string|unique:categories',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'parent_id' => 'nullable|exists:categories,id'
        ]);
        // Create new category
        $validatedData['slug'] = str_replace(' ', '-', $validatedData['slug']);
        $category = Category::create($validatedData);
        return redirect()->route('dashboard')->with('success', 'Category created successfully.');
    }

    public function show(Category $category)
    {
        // Show a specific category
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        // Retrieve all categories to show as parent options
        $categories = Category::all();

        // Return view for editing a category
        return view('categories.edit', compact('category', 'categories'));
    }

    public function update(Request $request, Category $category)
    {
        // Validate request data
        $validatedData = $request->validate([
            'title' => 'required|string',
            'sub_title' => 'nullable|string',
            'description' => 'nullable|string',
            'banner_image' => 'nullable|string',
            // 'slug' => 'required|string|unique:categories,slug,' . $category->id,
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'parent_id' => 'nullable|exists:categories,id'
        ]);
        $validatedData['slug'] = str_replace(' ', '-', $validatedData['slug']);
        // Update the category
        $category->update($validatedData);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        // Delete the category
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
