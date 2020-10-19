<?php

namespace App\Http\Controllers\Frontend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{
	private $product;
	private $productCategory;

	public function __construct(Product $product, ProductCategory $productCategory)
	{
		$this->product = $product;
		$this->productCategory = $productCategory;
	}

	public function index()
    {
    	$data['product_categories'] = $this->productCategory->where('status', true)->get();
    	$data['products'] = $this->product->latest()->where('status', true)->get();

    	return view('frontend.itSolution.product.index', $data);
    }
}
