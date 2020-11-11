<?php

namespace App\Http\Controllers\Backend\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMasterRequest;
use App\Models\Master;
use Auth;
use Str;

class MasterController extends Controller
{
    private $master;

    public function __construct(Master $master)
    {
        $this->middleware('auth:admin')->except('logout');
        $this->master = $master;
    }
   
    public function index()
    {
        $data['masters'] = $this->master->latest()->get();
        return view('backend.master.index', $data);
    }

    public function create()
    {
        return view('backend.master.create');
    }

    public function store(CreateMasterRequest $request)
    {
        $data = $request->all();
        $master = $this->getModel();
        $master->fill($request->all());
        $master->slug = str::slug($request->title).time();

        if ($request->hasFile('image')) {
            $image=$request->file('image');
            $originalName=time().$image->getClientOriginalName();
            $destination='images/uploads';
            $image->move($destination,$originalName);
            $master->image=$originalName;  
        }
        $master->save();

        return redirect(route('admin.master.index'))->with('success', 'Added Successfully');
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
        $data['master'] = $this->master->where('slug', $slug)->latest()->first();

        return view('backend.master.edit', $data);
    }

    public function update(CreateMasterRequest $request, $slug)
    {
        $master = $this->master->where('slug', $slug)->first();
        $master->type = $request->type;
        $master->title = $request->title;
        $master->slug = str::slug($request->title).time();
        $master->description = $request->description;

        if ($request->hasFile('image')) {

            if (!empty($master->image)) {
                $masterImage = public_path("images/uploads/{$master->image}");
                if (\File::exists($masterImage)) { 
                  unlink($masterImage);
                }
            }

            $image=$request->file('image');
            $originalName=time().$image->getClientOriginalName();
            $destination='images/uploads';
            $image->move($destination,$originalName);
            $master->image=$originalName;    
        }
        $master->save();

        return redirect(route('admin.master.index'))->with('success', 'Updated Successfully');
    }


    public function changeStatus(Request $request)
    {
        $news = $this->master->findOrFail($request->news_id);
        $news->status = $request->status;
        $news->save();
        $data['success'] =  "Status Changed Successfully";
        return $data;
    }

    public function destroy($id)
    {
        $master = $this->master->findOrFail($id);
        if (!$master) {
            return 'Record not found';
        }
        $master->delete();

        if (!empty($master->image)) {
            $masterImage = public_path("images/uploads/{$master->image}");
            if (\File::exists($masterImage)) { 
              unlink($masterImage);
            }
        }

        return "#master".$id;
    }

    protected function getModel()
    {
        return new Master();
    }
}
