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
        $categories = Category::select('title')->get(); // Fetch all categories
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
        // dd($request);
        // Validation rules - adjust as per your needs
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
        // Create new product
        $product = Product::create($validatedData);

        // Redirect to the product index page with a success message
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        // Fetch all necessary data for editing a product
        $categories = Category::select('title')->get(); // Fetch all categories
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
        // Validation rules - adjust as per your needs
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'sku' => 'required|string|max:255',
            'description' => 'nullable|string',
            'specification' => 'nullable|string',
            'video_link' => 'nullable|string|max:255',
            'slug' => 'required|string|unique:products,slug,' . $product->id,
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'size_guide' => 'nullable|string|max:255',
            'main_image' => 'nullable|string|max:255',
            'color_id' => 'nullable|exists:colors,id',
            'fabric_option_id' => 'nullable|exists:fabric_options,id',
            'wash_care_id' => 'nullable|exists:wash_cares,id',
            'feature_id' => 'nullable|exists:features,id',
            'gender_id' => 'nullable|exists:genders,id',
            'branding_option_id' => 'nullable|exists:branding_options,id',
            'pattern_id' => 'nullable|exists:patterns,id',
        ]);

        // Update product
        $product->update($validatedData);

        // Redirect to the product index page with a success message
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function show(Product $product)
    {
        // Show a specific category
        return view('products.show', compact('product'));
    }

    public function destroy(Product $product)
    {
        // Delete product
        $product->delete();

        // Redirect to the product index page with a success message
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
