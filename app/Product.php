<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];
    
    protected $fillable = [
    	'name',
    	'price',
    	'address',
    	'tax',
    	'stock',
    ];
}
