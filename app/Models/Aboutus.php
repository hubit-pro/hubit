<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Str;

class Aboutus extends Model
{
    protected $fillable = ['title', 'slug', 'description', 'image', 'type'];
}
