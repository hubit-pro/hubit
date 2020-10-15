<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\CreateProductRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use Auth;
use Str;

class ProductController extends Controller
{
     private $product;
     private $productCategory;

    public function __construct(Product $product, ProductCategory $productCategory)
    {
        $this->middleware('auth:admin')->except('logout');
        $this->product = $product;
        $this->productCategory = $productCategory;
    }
   
    public function index()
    {
        $data['products'] = $this->product->get();

        return view('backend.product.index', $data);
    }

    public function create()
    {
        $data['productCategories'] = $this->productCategory->get();

        return view('backend.product.create', $data);
    }

    public function store(CreateProductRequest $request)
    {
        $data = $request->all();
        $product = $this->getModel();
        $product->fill($request->all());
        $product->slug = str::slug($request->title).time();
        $product->creater = Auth::guard('admin')->user()->id;
        $product->save();

        if ($request->hasFile('image')) { 

            foreach($request->file('image') as $originalImage)
            {
	            $filename=time().$originalImage->getClientOriginalName();
	            $destination='images/uploads';
	            $originalImage->move($destination,$filename);
	            $product->images()->create(['image' => $filename]);  
            }  
        }

        return redirect(route('admin.product.index'))->with('success', 'Added Successfully');
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
        $data['product'] = $this->product->where('slug', $slug)->first();
        $data['productCategories'] = $this->productCategory->get();

        return view('backend.product.edit', $data);
    }

    public function update(CreateProductRequest $request, $slug)
    {
        $data = $request->all();
        $product = $this->product->where('slug', $slug)->first();
        $product->fill($request->all());
        $product->slug = str::slug($request->title).time();
        $product->updater = Auth::guard('admin')->user()->id;

        if ($request->hasFile('image')) {
        	if (!empty($product->images)) {
        		foreach ($product->images as $key => $image) {
        			$productImage = public_path("images/uploads/{$image->image}");
	                if (\File::exists($productImage)) { 
	                  unlink($productImage);
	                }
        		}
            }
        	$product->images()->delete();
            foreach($request->file('image') as $originalImage)
            {
	            $filename=time().$originalImage->getClientOriginalName();
	            $destination='images/uploads';
	            $originalImage->move($destination,$filename);
	            $product->images()->create(['image' => $filename]);  
            }  
        }
        $product->save();

        return redirect(route('admin.product.index'))->with('success', 'Updated Successfully');
    }


    public function changeStatus(Request $request)
    {
        $news = $this->product->findOrFail($request->news_id);
        $news->status = $request->status;
        $news->save();
        $data['success'] =  "Status Changed Successfully";
        return $data;
    }

    public function destroy($id)
    {
        $product = $this->product->findOrFail($id);
        if (!$product) {
            return 'Record not found';
        }

        if (!empty($product->images)) {
    		foreach ($product->images as $key => $image) {
    			$productImage = public_path("images/uploads/{$image->image}");
                if (\File::exists($productImage)) { 
                  unlink($productImage);
                }
    		}
        }

    	$product->images()->delete();
        $product->delete();
        
        return "#product".$id;
    }

    protected function getModel()
    {
        return new Product();
    }
}
