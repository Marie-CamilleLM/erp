<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $guarded = ['id'];
    
    protected $fillable = [
    	'name',
    	'address',
    	'country',
    ];
}
