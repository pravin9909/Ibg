<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Color; // Assuming Color model exists
use App\Models\FabricOption;
use App\Models\WashCare;
use App\Models\Feature;
use App\Models\Gender;
use App\Models\BrandingOption;
use App\Models\Pattern;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch all products
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        // Fetch all necessary data for creating a product
        $categories = Category::all(); // Fetch all categories
        $colors = Color::all(); // Fetch all colors
        $fabricOptions = FabricOption::all(); // Fetch all fabric options
        $washCares = WashCare::all(); // Fetch all wash cares
        $features = Feature::all(); // Fetch all features
        $genders = Gender::all(); // Fetch all genders
        $brandingOptions = BrandingOption::all(); // Fetch all branding options
        $patterns = Pattern::all(); // Fetch all patterns
        return view('products.create', compact('categories', 'colors', 'fabricOptions', 'washCares', 'features', 'genders', 'brandingOptions', 'patterns'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'sku' => 'required|string|max:255',
            'description' => 'nullable|string',
            'specification' => 'nullable|string',
            'video_link' => 'nullable|string|max:255',
            'slug' => 'required|string|unique:products,slug',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'size_guide' => 'nullable|string|max:255',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'nullable|exists:categories,id',
            'color_id' => 'nullable|exists:colors,id',
            'fabric_option_id' => 'nullable|exists:fabric_options,id',
            'wash_care_id' => 'nullable|exists:wash_cares,id',
            'feature_id' => 'nullable|exists:features,id',
            'gender_id' => 'nullable|exists:genders,id',
            'branding_option_id' => 'nullable|exists:branding_options,id',
            'pattern_id' => 'nullable|exists:patterns,id',
        ]);

        if ($request->hasFile('main_image')) {
            $imagePath = $request->file('main_image')->store('images', 'public');
            $validatedData['main_image'] = $imagePath;
        }

        $product = Product::create($validatedData);
        // dd($validatedData);
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        // Fetch all necessary data for editing a product
        $categories = Category::all(); // Fetch all categories
        $colors = Color::all(); // Fetch all colors
        $fabricOptions = FabricOption::all(); // Fetch all fabric options
        $washCares = WashCare::all(); // Fetch all wash cares
        $features = Feature::all(); // Fetch all features
        $genders = Gender::all(); // Fetch all genders
        $brandingOptions = BrandingOption::all(); // Fetch all branding options
        $patterns = Pattern::all(); // Fetch all patterns

        return view('products.edit', compact('product', 'categories', 'colors', 'fabricOptions', 'washCares', 'features', 'genders', 'brandingOptions', 'patterns'));
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'sku' => 'required|string|max:255',
            'description' => 'nullable|string',
            'specification' => 'nullable|string',
            'video_link' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'size_guide' => 'nullable|string|max:255',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'nullable|exists:categories,id',
            'color_id' => 'nullable|exists:colors,id',
            'fabric_option_id' => 'nullable|exists:fabric_options,id',
            'wash_care_id' => 'nullable|exists:wash_cares,id',
            'feature_id' => 'nullable|exists:features,id',
            'gender_id' => 'nullable|exists:genders,id',
            'branding_option_id' => 'nullable|exists:branding_options,id',
            'pattern_id' => 'nullable|exists:patterns,id',
        ]);

        if ($request->hasFile('main_image')) {
            $imagePath = $request->file('main_image')->store('images', 'public');
            $validatedData['main_image'] = $imagePath;
        }

        $product->update($validatedData);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

    public function text()
    {
        $products = Product::where('category_id', 1)->get();

        return response()->json(['products' => $products]);
    }

    public function getProductsByCategory(Request $request, $id)
    {
        // Fetch category and products
        $category = Category::findOrFail($id);
        $productsQuery = Product::where('category_id', $category->id);

        if ($request->has('colors')) {
            $productsQuery->whereIn('color_id', $request->input('colors'));
        }

        if ($request->has('brandingOptions')) {
            $productsQuery->whereIn('branding_option_id', $request->input('brandingOptions'));
        }

        if ($request->has('fabricOptions')) {
            $productsQuery->whereIn('fabric_id', $request->input('fabricOptions'));
        }

        if ($request->has('genders')) {
            $productsQuery->whereIn('gender_id', $request->input('genders'));
        }

        if ($request->has('patterns')) {
            $productsQuery->whereIn('pattern_id', $request->input('patterns'));
        }

        $products = $productsQuery->paginate(15);

        $colors = Color::all();
        $brandingOptions = BrandingOption::all();
        $fabricOptions = FabricOption::all();
        $genders = Gender::all();
        $patterns = Pattern::all();
        $categories = Category::all();

        return view('products.listing', [
            'category' => $category,
            'products' => $products,
            'colors' => $colors,
            'brandingOptions' => $brandingOptions,
            'fabricOptions' => $fabricOptions,
            'genders' => $genders,
            'patterns' => $patterns,
            'categories' => $categories,
        ]);
    }

    public function search(Request $request)
    {
        $categoryId = $request->input('category_id');
        $query = $request->input('query');

        $products = Product::query();

        // Filter by category if selected
        if ($categoryId != 0) {
            $products->where('category_id', $categoryId);
        }

        // Perform search if query is provided
        if (!empty($query)) {
            $products->where('title', 'like', '%' . $query . '%');
        }

        $products = $products->get();

        // Fetch categories for dropdown
        $categories = Category::all();

        return view('products.search_results', compact('products', 'categories'));
    }
    // Example from ProductController
    public function showCategory(Request $request, $categoryId)
    {
        $category = Category::findOrFail($categoryId);
    
        $query = Product::where('category_id', $categoryId);
    
        if ($request->filled('colors')) {
            $colors = explode(',', $request->input('colors'));
            $query->whereIn('color_id', $colors);
        }else {
            $colors = []; // Initialize as empty array if no colors selected
        }

        if ($request->filled('brandingOptions')) {
            $brandingOptions = explode(',', $request->input('brandingOptions'));
            $query->whereIn('branding_option_id', $brandingOptions);
        }else {
            $brandingOptions = []; // Initialize as empty array if no colors selected
        }

        if ($request->filled('fabricOptions')) {
            $fabricOptions = explode(',', $request->input('fabricOptions'));
            $query->whereIn('fabric_option_id', $fabricOptions);
        }else {
            $fabricOptions = []; // Initialize as empty array if no colors selected
        }

        if ($request->filled('genders')) {
            $genders = explode(',', $request->input('genders'));
            $query->whereIn('gender_id', $genders);
        }else {
            $genders = []; // Initialize as empty array if no colors selected
        }

        if ($request->filled('patterns')) {
            $patterns = explode(',', $request->input('patterns'));
            $query->whereIn('pattern_id', $patterns);
        }else {
            $patterns = []; // Initialize as empty array if no colors selected
        }
    
        $products = $query->paginate(15);
    
        $categories = Category::all();
        $colors = Color::all();
        $brandingOptions = BrandingOption::all();
        $fabricOptions = FabricOption::all();
        $genders = Gender::all();
        $patterns = Pattern::all();
    
        return view('products.listing', compact('category', 'products', 'categories', 'colors', 'brandingOptions', 'fabricOptions', 'genders', 'patterns'));
    }
    

    public function filter(Request $request)
    {
    
        $categorySlug = $request->input('category');
        $category = Category::where('slug', $categorySlug)->firstOrFail();

        $products = Product::where('category_id', $category->id);

        if ($request->has('color')) {
            $products->whereIn('color_id', $request->input('color'));
        }

        if ($request->has('brandingOptions')) {
            $products->whereIn('branding_option_id', $request->input('brandingOptions'));
        }

        if ($request->has('fabricOptions')) {
            $products->whereIn('fabric_option_id', $request->input('fabricOptions'));
        }

        if ($request->has('genders')) {
            $products->whereIn('gender_id', $request->input('genders'));
        }

        if ($request->has('patterns')) {
            $products->whereIn('pattern_id', $request->input('patterns'));
        }

        $products = $products->paginate(15);

        return view('products.listing', [
            'category' => $category,
            'products' => $products,
            'colors' => Color::all(),
            'brandingOptions' => BrandingOption::all(),
            'fabricOptions' => FabricOption::all(),
            'genders' => Gender::all(),
            'patterns' => Pattern::all(),
        ]);
    }
}
