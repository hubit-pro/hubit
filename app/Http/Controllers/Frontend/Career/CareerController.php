<?php

namespace App\Http\Controllers\Frontend\Career;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master;

class CareerController extends Controller
{
    private $master;

	public function __construct(Master $master)
	{
		$this->master = $master;
	}

    public function index()
    {
    	$data['vacancies'] = $this->master->type(Master::vacancy)->latest()->get();

    	return view('frontend.career.index', $data);
    }
}
