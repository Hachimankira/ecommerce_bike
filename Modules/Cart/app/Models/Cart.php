<?php

namespace Modules\Cart\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Cart\Database\Factories\CartFactory;
use Modules\Product\Models\Product;

class Cart extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    // protected static function newFactory(): CartFactory
    // {
    //     //return CartFactory::new();
    // }
    protected $fillable = ['user_id', 'product_id','quantity'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
