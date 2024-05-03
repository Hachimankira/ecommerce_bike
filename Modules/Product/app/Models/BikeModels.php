<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Product\Database\Factories\BikeModelsFactory;

class BikeModels extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    protected static function newFactory(): BikeModelsFactory
    {
        //return BikeModelsFactory::new();
    }
}
