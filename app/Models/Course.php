<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
    	'course_category_id',
    	'title', 
    	'slug',
    	'lecturer',
    	'description',
    	'image',
    	'noOfStudent',
    	'rating',
    	'strikFee',
    	'fee',
	];

    public function courseCategory() 
    {
        return $this->belongsTo(CourseCategory::class, 'course_category_id', 'id');
    }
}
