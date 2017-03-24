<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tower extends Model
{
	protected $fillable = ['name', 'long1', 'lat1', 'long2', 'lat2', 'long3', 'lat3', 'long4', 'lat4'];
}
