<?php

namespace Modules\Brand\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Brand\Database\Factories\BrandFactory;

class Brand extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    public function models(){
        return $this->hasMany(Models::class);
    }

    // protected static function newFactory(): BrandFactory
    // {
    //     //return BrandFactory::new();
    // }
}
