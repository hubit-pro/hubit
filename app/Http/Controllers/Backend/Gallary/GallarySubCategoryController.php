<?php

namespace App\Http\Controllers\Backend\Gallary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GallaryCategory;
use App\Models\GallarySubCategory;
use Auth;
use Str;


class GallarySubCategoryController extends Controller
{
     private $category;
    private $subCategory;

    public function __construct(GallarySubCategory $subCategory, GallaryCategory $category)
    {
        $this->middleware('auth:admin')->except('logout');
        $this->subCategory = $subCategory;
        $this->category = $category;
    }

    public function index()
    {
        $data['subCategories'] = $this->subCategory->latest()->get();
        $data['categories'] = $this->category->latest()->get();
        return view('backend.gallary.gallarySubCategory.index', $data);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'gallary_category_id' => 'required',
            'title' => 'required|unique:gallary_sub_categories'
        ]);
        $subCategory = new GallarySubCategory();
        $subCategory->gallary_category_id = $request->gallary_category_id;
        $subCategory->title = $request->title;
        $subCategory->slug = str::slug($request->title);
        $subCategory->save();

        $data['categories'] = $this->subCategory->latest()->first();
        $data['success'] = 'gallary Sub Category Added Successfully';
        return $data;
    }

    public function edit($id)
    {
        $subCategory = $this->subCategory->findOrFail($id);
        return $subCategory;
    }

    public function update(Request $request, $id)
    {
        $cat = $this->subCategory->findOrFail($id);
        $this->validate($request, [
            'gallary_category_id' => 'required',
            'title' => 'required|unique:gallary_sub_categories,title,' . $id,
        ]);

        $subCategory = $this->subCategory->findOrFail($id);
        $subCategory->gallary_category_id = $request->gallary_category_id;
        $subCategory->title = $request->title;
        $subCategory->slug = str::slug($request->title);
        $subCategory->save();

        $data['categories'] = $this->subCategory->latest()->first();
        $data['success'] = 'gallary Sub Category Updated Successfully';
        return $data;
    }

    public function destroy($id)
    {
        $company_subCategory = $this->subCategory->findOrFail($id);
        $company_subCategory->delete();
        return "#gallarySubCategory".$id;
    }

    public function changeStatus(Request $request)
    {
        $subCategory = $this->subCategory->findOrFail($request->sub_category_id);
        $subCategory->status = $request->status;
        $subCategory->save();
        $data['success'] =  "Status Changed Successfully";
        return $data;
    }

     public function changeIsSale(Request $request)
    {
        // dd($request->all());
        $category = $this->subCategory->findOrFail($request->category_id);
        $category->is_sale = $request->is_sale;
        $category->save();
        $data['success'] =  "Changed Successfully";
        return $data;
    }

    public function changeIsRent(Request $request)
    {
        $category = $this->subCategory->findOrFail($request->category_id);
        $category->is_rent = $request->is_rent;
        $category->save();
        $data['success'] =  "Changed Successfully";
        return $data;
    }

    public function changeIsAuction(Request $request)
    {
        $category = $this->subCategory->findOrFail($request->category_id);
        $category->is_auction = $request->is_auction;
        $category->save();
        $data['success'] =  "Changed Successfully";
        return $data;
    }
}
