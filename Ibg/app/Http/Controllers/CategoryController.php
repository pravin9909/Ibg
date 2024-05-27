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
        $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'description' => 'required|string',
            'banner_image' => 'nullable|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            // 'parent_id' => 'nullable|exists:categories,id',
        ]);

        // Create and save the new category
        $category = new Category();
        $category->title = $request->input('title');
        $category->sub_title = $request->input('sub_title');
        $category->description = $request->input('description');
        $category->banner_image = $request->input('banner_image');
        $category->slug = $request->input('slug');
        $category->meta_title = $request->input('meta_title');
        $category->meta_description = $request->input('meta_description');
        // $category->parent_id = $request->input('parent_id');
        $category->save();
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
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'parent_id' => 'nullable|exists:categories,id'
        ]);

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
