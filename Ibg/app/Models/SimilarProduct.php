<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimilarProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 'similar_product_id'
    ];

    /**
     * Get the product associated with the similar product.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the similar product associated with the similar product.
     */
    public function similarProduct()
    {
        return $this->belongsTo(Product::class, 'similar_product_id');
    }
}
