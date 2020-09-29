<?php

namespace App\Http\Controllers\Backend\Gallary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GallaryCategory;
use Auth;
use Str;

class GallaryCategoryController extends Controller
{
    private $category;

    public function __construct(GallaryCategory $category)
    {
        $this->middleware('auth:admin')->except('logout');
        $this->category = $category;
    }

    public function index()
    {
        $data['categories'] = $this->category->latest()->get();
        return view('backend.gallary.gallaryCategory.index', $data);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:gallary_categories'
        ]);

        $category = new GallaryCategory();
        $category->title = $request->title;
        $category->slug = str::slug($request->title);
        $category->save();

        $data['categories'] = $this->category->latest()->first();
        $data['success'] = 'Category Added Successfully';
        return $data;
    }

    public function edit($id)
    {
        $category = $this->category->findOrFail($id);
        return $category;
    }

    public function update(Request $request, $id)
    {
        $cat = $this->category->findOrFail($id);
        $this->validate($request, [
            'title' => 'required|unique:gallary_categories,title,' . $id,
        ]);

        $category = $this->category->findOrFail($id);
        $category->title = $request->title;
        $category->slug = str::slug($request->title);
        $category->save();

        $data['categories'] = $this->category->latest()->first();
        $data['success'] = 'Category Updated Successfully';
        return $data;
    }

    public function destroy($id)
    {
        $company_category = $this->category->findOrFail($id);
        $company_category->delete();
        return "#gallaryCategory".$id;
    }

    public function changeStatus(Request $request)
    {
        $category = $this->category->findOrFail($request->category_id);
        $category->status = $request->status;
        $category->save();
        $data['success'] =  "Status Changed Successfully";
        return $data;
    }
}
