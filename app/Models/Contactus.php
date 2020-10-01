<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $fillable = [
	    	'companyName', 
	    	'slug', 
	    	'location', 
	    	'mailAddress', 
	    	'optionalMailAddress', 
	    	'officePhone', 
	    	'salePhone',
	    	'socialPhone',
	    	'supportSoftwarePhone',
	    	'supportHardwarePhone',
	    	'itTrainingPhone',
	    	'facebookUrl',
	    	'linkedinUrl',
	    	'youtubeUrl',
	    	'instagramUrl',
	    	'twitterUrl',
	    	'map',
    	];
}
