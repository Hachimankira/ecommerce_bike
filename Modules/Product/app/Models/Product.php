<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Product\Database\Factories\ProductFactory;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [
        // 'brand',
        // 'model',
        // 'year',
        // 'type',
        // 'body_type',
        // 'distance',
        // 'colour',
        // 'condition',
        // 'gear',
        // 'suspension',
        // 'break',
        // 'owner',
        // 'price',
        // 'negotiable',
        // 'address',
        // 'deliveryOption',
        // 'banner_img',
        // 'other_img',
        // 'description',
    ];

    protected static function newFactory(): ProductFactory
    {
        //return ProductFactory::new();
    }
}
