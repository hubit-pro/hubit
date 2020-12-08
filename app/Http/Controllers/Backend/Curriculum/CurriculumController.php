<?php

namespace App\Http\Controllers\Backend\Curriculum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Requests\Course\CreateCurriculumRequest;
// use App\Http\Requests\Course\UpdateCurriculumRequest;
use App\Models\Course;
use App\Models\Curriculum;
use Auth;
use Str;

class CurriculumController extends Controller
{
     private $course;
     private $curriculum;

    public function __construct(Course $course, Curriculum $curriculum)
    {
        $this->middleware('auth:admin')->except('logout');
        $this->course = $course;
        $this->curriculum = $curriculum;
    }
   
    public function index()
    {
        $data['curriculums'] = $this->curriculum->get();

        return view('backend.course.curriculum.index', $data);
    }

    public function create()
    {
        $data['curriculums1'] = $this->curriculum->get();
        $data['courses'] = $this->course->get();

        return view('backend.course.curriculum.create', $data);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $curriculum = $this->getModel();
        $curriculum->fill($request->all());
        $curriculum->slug = str::slug($request->title).time();
        $curriculum->creater = Auth::guard('admin')->user()->id;
        $curriculum->save();

        return redirect(route('admin.curriculum.index'))->with('success', 'Added Successfully');
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
        $data['curriculum'] = $this->curriculum->where('slug', $slug)->first();
        $data['curriculums1'] = $this->curriculum->where('course_type', null)->get();
        $data['courses'] = $this->course->get();

        return view('backend.course.curriculum.edit', $data);
    }

    public function update(Request $request, $slug)
    {
        $data = $request->all();
        $curriculum = $this->curriculum->where('slug', $slug)->first();
        $curriculum->fill($request->all());
        $curriculum->slug = str::slug($request->title).time();
        $curriculum->updater = Auth::guard('admin')->user()->id;

        $curriculum->save();

        return redirect(route('admin.curriculum.index'))->with('success', 'Updated Successfully');
    }

    public function destroy($id)
    {
        $curriculum = $this->curriculum->findOrFail($id);
        if (!$curriculum) {
            return 'Record not found';
        }
        $curriculum->delete();
        
        return "#curriculum".$id;
    }

    protected function getModel()
    {
        return new Curriculum();
    }
}
