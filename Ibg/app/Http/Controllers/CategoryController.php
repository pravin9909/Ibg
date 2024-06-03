<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

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
        return view('categories.create');
    }

    public function store(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'description' => 'required|string',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slug' => 'required|string|max:255|unique:categories,slug',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
        ]);
// dd($validatedData);
        // Process banner image upload
        if ($request->hasFile('banner_image')) {
            $imagePath = $request->file('banner_image')->store('public/categories', 'public');
            $validatedData['banner_image'] = $imagePath;
        }

        // Create and save the new category
        Category::create($validatedData);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        $categories = Category::all();

        // Return view for editing a category
        return view('categories.edit', compact('category', 'categories'));
    }

    public function update(Request $request, Category $category)
{

    // Validate request data
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'sub_title' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // 'slug' => 'required|string|max:255|unique:categories,slug,' . $category->id,
        'meta_title' => 'nullable|string|max:255',
        'meta_description' => 'nullable|string',
    ]);

    // Handle banner image update
    if ($request->hasFile('banner_image')) {
        // Delete old image if exists
        if ($category->banner_image && Storage::disk('public')->exists($category->banner_image)) {
            Storage::disk('public')->delete($category->banner_image);
        }

        // Upload new image
        $imagePath = $request->file('banner_image')->store('public/categories', 'public');
        $validatedData['banner_image'] = $imagePath;
    }

    // Update category

    $category->update($validatedData);

    return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
}


    public function destroy(Category $category)
    {
        // Delete banner image if exists
        if ($category->banner_image && Storage::disk('public')->exists($category->banner_image)) {
            Storage::disk('public')->delete($category->banner_image);
        }

        // Delete category
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }

    public function showCategories()
    {
        $categories = Category::all(); // Fetch all categories

        foreach ($categories as $category) {
            $category->products = Product::where('category_id', $category->id)->get(); // Fetch products for each category
        }

        return view('welcome', compact('categories'));
    }
    public function getProductsByCategory($id)
    {
        $category = Category::findOrFail($id);
        $products = $category->products; // Assuming you have a relationship set up between Category and Product

        return view('products.listing', compact('products', 'category'));
    }
}
