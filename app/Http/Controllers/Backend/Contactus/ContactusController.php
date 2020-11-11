<?php

namespace App\Http\Controllers\Backend\Contactus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Contactus\CreateContactusRequest;
use App\Models\Contactus;
use Str;
use Auth;

class ContactusController extends Controller
{
    private $contactus;

    public function __construct(Contactus $contactus)
    {
        $this->middleware('auth:admin')->except('logout');
        $this->contactus = $contactus;
    }
   
    public function index()
    {
        $data['contactus'] = $this->contactus->latest()->first();
        return view('backend.contactus.index', $data);
    }

    public function create()
    {
        return view('backend.contactus.create');
    }

    public function store(CreateContactusRequest $request)
    {
        $data = $request->all();
        $contactus = $this->getModel();
        $contactus->fill($request->all());
        $contactus->slug = str::slug($request->companyName).time();
        $contactus->creater = Auth::guard('admin')->user()->id;

        if ($request->hasFile('image')) {
            $image=$request->file('image');
            $originalName=time().$image->getClientOriginalName();
            $destination='images/uploads';
            $image->move($destination,$originalName);
            $contactus->image=$originalName;  
        }
        $contactus->save();

        return redirect(route('admin.contactus.index'))->with('success', 'Added Successfully');
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
        $data['contactus'] = $this->contactus->where('slug', $slug)->latest()->first();

        return view('backend.contactus.edit', $data);
    }

    public function update(CreateContactusRequest $request, $slug)
    {
        $data = $request->all();
        $contactus = $this->contactus->where('slug', $slug)->first();
        $contactus->fill($request->all());
        $contactus->slug = str::slug($request->companyName).time();
        $contactus->updater = Auth::guard('admin')->user()->id;

        if ($request->hasFile('image')) {

            if (!empty($contactus->image)) {
                $contactusImage = public_path("images/uploads/{$contactus->image}");
                if (\File::exists($contactusImage)) { 
                  unlink($contactusImage);
                }
            }

            $image=$request->file('image');
            $originalName=time().$image->getClientOriginalName();
            $destination='images/uploads';
            $image->move($destination,$originalName);
            $contactus->image=$originalName;    
        }
        $contactus->save();

        return redirect(route('admin.contactus.index'))->with('success', 'Updated Successfully');
    }


    public function changeStatus(Request $request)
    {
        $news = $this->contactus->findOrFail($request->news_id);
        $news->status = $request->status;
        $news->save();
        $data['success'] =  "Status Changed Successfully";
        return $data;
    }

    public function destroy($id)
    {
        $contactus = $this->contactus->findOrFail($id);
        if (!$contactus) {
            return 'Record not found';
        }
        $contactus->delete();

        if (!empty($contactus->image)) {
            $contactusImage = public_path("images/uploads/{$contactus->image}");
            if (\File::exists($contactusImage)) { 
              unlink($contactusImage);
            }
        }

        return "#contactus".$id;
    }

    protected function getModel()
    {
        return new Contactus();
    }
}
