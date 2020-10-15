<?php

namespace App\Http\Controllers\Frontend\Gallary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallary;
use App\Models\GallaryCategory;
use App\Models\GallarySubCategory;

class GallaryController extends Controller
{
	private $gallary;
	private $gallarySubCategory;
	private $gallaryCategory;

	public function __construct(Gallary $gallary, GallaryCategory $gallaryCategory, GallarySubCategory $gallarySubCategory)
	{
		$this->gallary = $gallary;
		$this->gallaryCategory = $gallaryCategory;
		$this->gallarySubCategory = $gallarySubCategory;
	}

    public function index($slug)
    {
    	$gallaryCategory = $this->gallaryCategory->where('slug', $slug)->first();
    	if (!$gallaryCategory) {
    		return 'record not found';
    	}
    	$data['gallaryCategory'] = $gallaryCategory;
    	$data['gallarySubCategories'] = $this->gallarySubCategory->where('gallary_category_id', $gallaryCategory->id)->get();
    	$data['gallaries'] = $this->gallary->where('gallary_category_id', $gallaryCategory->id)->latest()->paginate(8);

    	return view('frontend.gallary.index', $data);
    }
}
