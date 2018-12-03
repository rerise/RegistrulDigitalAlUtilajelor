<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    protected $fillable = [
	    'name',
	    'location_details',
	    'lat',
	    'lng'
	];
}
