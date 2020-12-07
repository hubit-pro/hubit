<?php

namespace App\Http\Controllers\Frontend\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCategory;

class CourseController extends Controller
{
    private $course;
    private $courseCategory;

	public function __construct(Course $course, CourseCategory $courseCategory)
	{
		$this->course = $course;
        $this->courseCategory = $courseCategory;
	}

	public function index()
    {
    	$data['courses'] = $this->course->where('status', true)->paginate(8);
        $data['latestCourses'] = $this->course->where('status', true)->latest()->take(3)->get();
        $data['courseCategories'] = $this->courseCategory->where('status', true)->get();

    	return view('frontend.itTraining.course.index', $data);
    }

    public function details($slug)
    {
    	$data['course'] = $this->course->where('slug', $slug)->first();
        $data['latestCourses'] = $this->course->where('status', true)->latest()->take(3)->get();
        // dd($data);

    	return view('frontend.itTraining.course.detail', $data);
    }
}
