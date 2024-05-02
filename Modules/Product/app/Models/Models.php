<?php

namespace Modules\Brand\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Brand\Database\Factories\ModelFactory;

class Models extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    // protected static function newFactory(): ModelFactory
    // {
    //     // return ModelFactory::new();
       
    // }
}
