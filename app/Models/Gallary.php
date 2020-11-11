<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallary extends Model
{
     protected $fillable = ['gallary_category_id', 'gallary_sub_category_id', 'name', 'slug', 'email', 'phoneNumber', 'companyName', 'location', 'clientSpeech', 'description'];

    public function images()
    {
    	return $this->morphMany('App\Models\Image', 'imageable');
    }

     public function category()
     {
     	return $this->belongsTo(GallaryCategory::class, 'gallary_category_id', 'id');
     }

     public function subCategory()
     {
     	return $this->belongsTo(GallarySubCategory::class, 'gallary_sub_category_id', 'id');
     }
}
