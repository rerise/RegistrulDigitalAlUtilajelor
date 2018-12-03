<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $fillable = [
    	'name',
    	'operator_id',
    	'location_details',
    	'lat',
    	'lng',
    	'level_equipment',
    	'type',
    ];
}
