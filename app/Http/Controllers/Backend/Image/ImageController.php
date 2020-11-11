<?php

namespace App\Http\Controllers\Backend\Image;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Image\CreateImageRequest;
use App\Http\Requests\Image\UpdateImageRequest;
use App\Models\Image1;
use Auth;
use Str;

class ImageController extends Controller
{
     private $image;

    public function __construct(Image1 $image)
    {
        $this->middleware('auth:admin')->except('logout');
        $this->image = $image;
    }
   
    public function index()
    {
        $data['images'] = $this->image->latest()->get();
        return view('backend.image.index', $data);
    }

    public function create()
    {
        return view('backend.image.create');
    }

    public function store(CreateImageRequest $request)
    {
        $image = $this->getModel();
        $image->type = $request->type;
        $image->slug = str::slug($request->type).time();

        if ($request->hasFile('image')) {
            $img=$request->file('image');
            $originalName=time().$img->getClientOriginalName();
            $destination='images/uploads';
            $img->move($destination,$originalName);
            $image->image=$originalName;  
        }
        $image->save();

        return redirect(route('admin.image.index'))->with('success', 'Added Successfully');
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
        $data['image'] = $this->image->where('slug', $slug)->latest()->first();

        return view('backend.image.edit', $data);
    }

    public function update(UpdateImageRequest $request, $slug)
    {
        $image = $this->image->where('slug', $slug)->first();
        $image->slug = $request->type;
        $image->slug = str::slug($request->type).time();

        if ($request->hasFile('image')) {

            if (!empty($image->image)) {
                $imageImage = public_path("images/uploads/{$image->image}");
                if (\File::exists($imageImage)) { 
                  unlink($imageImage);
                }
            }

            $img=$request->file('image');
            $originalName=time().$img->getClientOriginalName();
            $destination='images/uploads';
            $img->move($destination,$originalName);
            $image->image=$originalName;    
        }
        $image->save();

        return redirect(route('admin.image.index'))->with('success', 'Updated Successfully');
    }


    public function changeStatus(Request $request)
    {
        $news = $this->image->findOrFail($request->news_id);
        $news->status = $request->status;
        $news->save();
        $data['success'] =  "Status Changed Successfully";
        return $data;
    }

    public function destroy($id)
    {
        $image = $this->image->findOrFail($id);
        if (!$image) {
            return 'Record not found';
        }
        $image->delete();

        if (!empty($image->image)) {
            $imageImage = public_path("images/uploads/{$image->image}");
            if (\File::exists($imageImage)) { 
              unlink($imageImage);
            }
        }

        return "#image".$id;
    }

    protected function getModel()
    {
        return new Image1();
    }
}
