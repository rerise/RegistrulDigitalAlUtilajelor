<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected $fillable = [
	    'name',
	    'preparation_details',
	    'preparation_level_id'
	];
}
