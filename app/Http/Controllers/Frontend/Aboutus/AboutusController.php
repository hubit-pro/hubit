<?php

namespace App\Http\Controllers\Frontend\Aboutus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master;
use App\Models\Gallary;

class AboutusController extends Controller
{
	private $master;
	private $gallary;

	public function __construct(Master $master, Gallary $gallary)
	{
		$this->master = $master;
		$this->gallary = $gallary;
	}

    public function index()
    {
    	$data['aboutusMain'] = $this->master->type(Master::aboutusMain)->latest()->first();
    	$data['aboutuses'] = $this->master->type(Master::aboutus)->take(4)->get();
    	$data['clientSpeeches'] = $this->gallary->where('status', true)->latest()->get();
    	$data['certificates'] = $this->master->type(Master::certificate)->get();
    	// dd($data);

    	return view('frontend.aboutus.index', $data);
    }
}
