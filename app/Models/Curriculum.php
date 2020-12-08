<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $table = "curricula";

    protected $fillable = ['course_id', 'course_type', 'title', 'slug', 'description'];

    public function course()
    {
    	return $this->belongsTo('App\Models\Course','course_id');
    }
}
