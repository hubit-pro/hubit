<?php

namespace App\Http\Controllers\Frontend\Aboutus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master;

class AboutusController extends Controller
{
	private $master;

	public function __construct(Master $master)
	{
		$this->master = $master;
	}

    public function index()
    {
    	$data['aboutusMain'] = $this->master->type(Master::aboutusMain)->latest()->first();
    	$data['aboutuses'] = $this->master->type(Master::aboutus)->take(4)->get();
    	
    	return view('frontend.aboutus.index', $data);
    }
}
