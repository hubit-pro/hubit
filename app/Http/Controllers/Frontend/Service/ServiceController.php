<?php

namespace App\Http\Controllers\Frontend\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master;

class ServiceController extends Controller
{
    private $master;

	public function __construct(Master $master)
	{
		$this->master = $master;
	}

    public function index()
    {
    	$data['services'] = $this->master->type(Master::service)->get();

    	return view('frontend.itSolution.service.index', $data);
    }
}
