<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Product name, Category, description
    protected $fillable = [
        'productName', 'category', 'description',
    ];
}
