<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_id', 'attribute_id', 'sku', 'name', 'category',
        'image', 'image1', 'image2', 'image3',
        'price', 'sale_price', 'discount', 'quantity',
        'short_description', 'long_description',
    ];
}
