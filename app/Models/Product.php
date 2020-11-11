<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_category_id','title', 'slug', 'description'];

    public function images()
    {
    	return $this->morphMany('App\Models\Image', 'imageable');
    }

    public function productCategory()
    {
    	return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }
}
