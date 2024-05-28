<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    /**
     * Get the products associated with the color.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
