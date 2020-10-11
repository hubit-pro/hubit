<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Student\CreateStudentRequest;
use App\Http\Requests\Student\UpdateStudentRequest;
use App\Models\Student;
use Auth;
use Str;

class StudentController extends Controller
{
     private $student;

    public function __construct(Student $student)
    {
        $this->middleware('auth:admin')->except('logout');
        $this->student = $student;
    }
   
    public function index()
    {
        $data['students'] = $this->student->latest()->get();
        return view('backend.student.index', $data);
    }

    public function create()
    {
        return view('backend.student.create');
    }

    public function store(CreateStudentRequest $request)
    {
        $data = $request->all();
        $student = $this->getModel();
        $student->fill($request->all());
        $student->slug = str::slug($request->fullName).time();
        $student->password = bcrypt($request->password);
        $student->save();

        return redirect(route('admin.student.index'))->with('success', 'Added Successfully');
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
        $data['student'] = $this->student->where('slug', $slug)->latest()->first();

        return view('backend.student.edit', $data);
    }

    public function update(UpdateStudentRequest $request, $slug)
    {
        $data = $request->all();
        $student = $this->student->where('slug', $slug)->first();
        $student->fill($request->all());
        $student->slug = str::slug($request->fullName).time();
        $student->password = bcrypt($request->password);
        $student->save();

        return redirect(route('admin.student.index'))->with('success', 'Updated Successfully');
    }


    public function changeStatus(Request $request)
    {
        $news = $this->student->findOrFail($request->news_id);
        $news->status = $request->status;
        $news->save();
        $data['success'] =  "Status Changed Successfully";
        return $data;
    }

    public function destroy($id)
    {
        $student = $this->student->findOrFail($id);
        if (!$student) {
            return 'Record not found';
        }
        $student->delete();

        return "#student".$id;
    }

    protected function getModel()
    {
        return new Student();
    }
}
