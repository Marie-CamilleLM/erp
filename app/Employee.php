<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = ['id'];
    
    protected $fillable = [
    	'name',
    	'birthday',
    	'country',
    	'first_day_in_company',
    ];
}
