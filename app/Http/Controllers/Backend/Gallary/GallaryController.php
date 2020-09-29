<?php

namespace App\Http\Controllers\Backend\Gallary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateGallaryRequest;
use App\Http\Requests\UpdateGallaryRequest;
use App\Models\Gallary;
use App\Models\GallaryCategory;
use App\Models\GallarySubCategory;
use Auth;
use Str;

class GallaryController extends Controller
{
      private $gallary;
      private $gallaryCategory;
      private $gallarySubCategory;

    public function __construct(Gallary $gallary, GallaryCategory $gallaryCategory, GallarySubCategory $gallarySubCategory)
    {
        $this->middleware('auth:admin')->except('logout');
        $this->gallary = $gallary;
        $this->gallaryCategory = $gallaryCategory;
        $this->gallarySubCategory = $gallarySubCategory;
    }
   
    public function index()
    {
        $data['gallaries'] = $this->gallary->get();

        return view('backend.gallary.index', $data);
    }

    public function create()
    {
        $data['gallaryCategories'] = $this->gallaryCategory->get();
        $data['gallarySubCategories'] = $this->gallarySubCategory->get();

        return view('backend.gallary.create', $data);
    }

    public function store(CreateGallaryRequest $request)
    {
        $data = $request->all();
        $gallary = $this->getModel();
        $gallary->fill($request->all());
        $gallary->slug = str::slug($request->name).time();
        $gallary->creater = Auth::guard('admin')->user()->id;

        if ($request->hasFile('image')) {
            // $image=$request->file('image');
            // $originalName=time().$image->getClientOriginalName();
            // $destination='images/uploads';
            // $image->move($destination,$originalName);
            // $gallary->image=$originalName;  
        }
        $gallary->save();

        return redirect(route('admin.gallary.index'))->with('success', 'gallary Added Successfully');
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
        $data['gallary'] = $this->gallary->where('slug', $slug)->first();
        $data['gallaryCategories'] = $this->gallaryCategory->get();
        $data['gallarySubCategories'] = $this->gallarySubCategory->get();

        return view('backend.gallary.edit', $data);
    }

    public function update(UpdateGallaryRequest $request, $slug)
    {
        $data = $request->all();
        $gallary = $this->gallary->where('slug', $slug)->first();
        $gallary->fill($request->all());
        $gallary->slug = str::slug($request->name).time();
        $gallary->updater = Auth::guard('admin')->user()->id;

        if ($request->hasFile('image')) {

            // if (!empty($gallary->image)) {
            //     $gallaryImage = public_path("images/uploads/{$gallary->image}");
            //     if (\File::exists($gallaryImage)) { 
            //       unlink($gallaryImage);
            //     }
            // }

            // $image=$request->file('image');
            // $originalName=time().$image->getClientOriginalName();
            // $destination='images/uploads';
            // $image->move($destination,$originalName);
            // $gallary->image=$originalName;    
        }
        $gallary->save();

        return redirect(route('admin.gallary.index'))->with('success', 'Added Successfully');
    }


    public function changeStatus(Request $request)
    {
        $news = $this->gallary->findOrFail($request->news_id);
        $news->status = $request->status;
        $news->save();
        $data['success'] =  "Status Changed Successfully";
        return $data;
    }

    public function destroy($id)
    {
        $construction = $this->gallary->findOrFail($id);
        if (!$construction) {
            return 'Record not found';
        }
        $construction->delete();

        if (!empty($construction->image)) {
            // $gallaryImage = public_path("images/uploads/{$construction->image}");
            // if (\File::exists($gallaryImage)) { 
            //   unlink($gallaryImage);
            // }
        }

        return "#gallary".$id;
    }

    public function subCategory(Request $request)
    {
        $data = $this->gallarySubCategory->where('gallary_category_id', $request->category_id)->where('status', true)->get();
        return $data;
    }

    protected function getModel()
    {
        return new Gallary();
    }
}
