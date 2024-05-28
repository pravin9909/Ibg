<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    /**
     * Get the products associated with the gender.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
