<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Str;

class Master extends Model
{
	protected $table = "masters";
    protected $fillable = ['title', 'slug', 'description', 'image', 'type'];

}
