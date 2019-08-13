<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    
    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product');
    }
}
