<?php

namespace App\Http\Controllers\Backend\Aboutus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateAboutusRequest;
use App\Http\Requests\UpdateAboutusRequest;
use App\Models\Aboutus;
use Auth;
use Str;

class AboutusController extends Controller
{
    private $aboutus;

    public function __construct(Aboutus $aboutus)
    {
        $this->middleware('auth:admin')->except('logout');
        $this->aboutus = $aboutus;
    }
   
    public function index()
    {
        $data['aboutuses'] = $this->aboutus->latest()->get();
        return view('backend.aboutus.index', $data);
    }

    public function create()
    {
        return view('backend.aboutus.create');
    }

    public function store(CreateAboutusRequest $request)
    {
        $data = $request->all();
        $aboutus = $this->getModel();
        $aboutus->fill($request->all());
        $aboutus->slug = str::slug($request->title).time();

        if ($request->hasFile('image')) {
            $image=$request->file('image');
            $originalName=time().$image->getClientOriginalName();
            $destination='images/uploads';
            $image->move($destination,$originalName);
            $aboutus->image=$originalName;  
        }
        $aboutus->save();

        return redirect(route('admin.aboutus.index'))->with('success', 'aboutus Added Successfully');
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
        $data['aboutus'] = $this->aboutus->where('slug', $slug)->latest()->first();

        return view('backend.aboutus.edit', $data);
    }

    public function update(CreateAboutusRequest $request, $slug)
    {
        $aboutus = $this->aboutus->where('slug', $slug)->first();
        $aboutus->type = $request->type;
        $aboutus->title = $request->title;
        $aboutus->slug = str::slug($request->title).time();
        $aboutus->description = $request->description;

        if ($request->hasFile('image')) {

            if (!empty($aboutus->image)) {
                $aboutusImage = public_path("images/uploads/{$aboutus->image}");
                if (\File::exists($aboutusImage)) { 
                  unlink($aboutusImage);
                }
            }

            $image=$request->file('image');
            $originalName=time().$image->getClientOriginalName();
            $destination='images/uploads';
            $image->move($destination,$originalName);
            $aboutus->image=$originalName;    
        }
        $aboutus->save();

        return redirect(route('admin.aboutus.index'))->with('success', 'aboutus Added Successfully');
    }


    public function changeStatus(Request $request)
    {
        $news = $this->aboutus->findOrFail($request->news_id);
        $news->status = $request->status;
        $news->save();
        $data['success'] =  "Status Changed Successfully";
        return $data;
    }

    public function destroy($id)
    {
        $construction = $this->aboutus->findOrFail($id);
        if (!$construction) {
            return 'Record not found';
        }
        $construction->delete();

        if (!empty($construction->image)) {
            $aboutusImage = public_path("images/uploads/{$construction->image}");
            if (\File::exists($aboutusImage)) { 
              unlink($aboutusImage);
            }
        }

        return "#aboutus".$id;
    }

    protected function getModel()
    {
        return new Aboutus();
    }
}
