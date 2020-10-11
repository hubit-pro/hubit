<?php

namespace App\Http\Controllers\Backend\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Course\CreateCourseRequest;
use App\Http\Requests\Course\UpdateCourseRequest;
use App\Models\Course;
use App\Models\CourseCategory;
use Auth;
use Str;

class CourseController extends Controller
{
      private $course;
     private $courseCategory;

    public function __construct(Course $course, CourseCategory $courseCategory)
    {
        $this->middleware('auth:admin')->except('logout');
        $this->course = $course;
        $this->courseCategory = $courseCategory;
    }
   
    public function index()
    {
        $data['courses'] = $this->course->get();

        return view('backend.course.index', $data);
    }

    public function create()
    {
        $data['courseCategories'] = $this->courseCategory->get();

        return view('backend.course.create', $data);
    }

    public function store(CreateCourseRequest $request)
    {
        $data = $request->all();
        $course = $this->getModel();
        $course->fill($request->all());
        $course->slug = str::slug($request->title).time();
        $course->creater = Auth::guard('admin')->user()->id;

        if ($request->hasFile('image')) { 

            $image=$request->file('image');
            $originalName=time().$image->getClientOriginalName();
            $destination='images/uploads';
            $image->move($destination,$originalName);
            $course->image=$originalName; 
        }
        $course->save();

        return redirect(route('admin.course.index'))->with('success', 'Added Successfully');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $data['course'] = $this->course->where('slug', $slug)->first();
        $data['courseCategories'] = $this->courseCategory->get();

        return view('backend.course.edit', $data);
    }

    public function update(UpdateCourseRequest $request, $slug)
    {
        $data = $request->all();
        $course = $this->course->where('slug', $slug)->first();
        $course->fill($request->all());
        $course->slug = str::slug($request->title).time();
        $course->updater = Auth::guard('admin')->user()->id;

        if ($request->hasFile('image')) {

            if (!empty($course->image)) {
                $courseImage = public_path("images/uploads/{$course->image}");
                if (\File::exists($courseImage)) { 
                  unlink($courseImage);
                }
            }

            $image=$request->file('image');
            $originalName=time().$image->getClientOriginalName();
            $destination='images/uploads';
            $image->move($destination,$originalName);
            $course->image=$originalName;    
        }
        $course->save();

        return redirect(route('admin.course.index'))->with('success', 'Updated Successfully');
    }


    public function changeStatus(Request $request)
    {
        $news = $this->course->findOrFail($request->news_id);
        $news->status = $request->status;
        $news->save();
        $data['success'] =  "Status Changed Successfully";
        return $data;
    }

    public function destroy($id)
    {
        $course = $this->course->findOrFail($id);
        if (!$course) {
            return 'Record not found';
        }
        $course->delete();

        if (!empty($course->image)) {
            $courseImage = public_path("images/uploads/{$course->image}");
            if (\File::exists($courseImage)) { 
              unlink($courseImage);
            }
        }

        
        return "#course".$id;
    }

    protected function getModel()
    {
        return new Course();
    }
}
