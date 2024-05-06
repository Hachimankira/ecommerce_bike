<?php

namespace Modules\Homepage\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Homepage\Database\Factories\ContactFactory;

class Contact extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    protected static function newFactory(): ContactFactory
    {
        //return ContactFactory::new();
    }
}
