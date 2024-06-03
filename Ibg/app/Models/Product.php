<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'subtitle', 'sku', 'description', 'specification',
        'video_link', 'created_by', 'created_date', 'updated_by', 'updated_at',
        'status', 'size', 'slug', 'meta_title', 'meta_description','category_id',
        'size_guide', 'main_image', 'color_id', 'fabric_option_id',
        'wash_care_id', 'feature_id', 'gender_id', 'branding_option_id',
        'pattern_id'
    ];

    /**
     * Get the color associated with the product.
     */
    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    /**
     * Get the fabric option associated with the product.
     */
    public function fabricOption()
    {
        return $this->belongsTo(FabricOption::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    /**
     * Get the wash care associated with the product.
     */
    public function washCare()
    {
        return $this->belongsTo(WashCare::class);
    }

    /**
     * Get the feature associated with the product.
     */
    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }

    /**
     * Get the gender associated with the product.
     */
    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    /**
     * Get the branding option associated with the product.
     */
    public function brandingOption()
    {
        return $this->belongsTo(BrandingOption::class);
    }

    /**
     * Get the pattern associated with the product.
     */
    public function pattern()
    {
        return $this->belongsTo(Pattern::class);
    }

    /**
     * Get the similar products for the product.
     */
    public function similarProducts()
    {
        return $this->belongsToMany(Product::class, 'similar_products', 'product_id', 'similar_product_id');
    }
}
