<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GallarySubCategory extends Model
{
    public function gallaryCategory()
    {
    	return $this->belongsTo('App\Models\GallaryCategory');
    }
}
