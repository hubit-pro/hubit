<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
	const main = 0;
	const sub = 1;
    protected $fillable = ['title', 'slug', 'description', 'image', 'type'];
}
