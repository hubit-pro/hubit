<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Str;

class Master extends Model
{
	const aboutusMain = 1;
	const aboutus = 2;
	const mission = 3;
	const certificate = 4;
	const vacancy = 5;
	const service = 6;
	const blog = 7;

	const aboutusMainName = 'Aboutus(main)';
	const aboutusName = 'Aboutus';
	const missionName = 'Target(Mission)';
	const certificateName = 'Sertificate&Award';
	const vacancyName = 'vacancy';
	const serviceName = 'Service';
	const blogName = 'Blog';

	protected $table = "masters";
    protected $fillable = ['title', 'slug', 'description', 'image', 'type'];

    protected $appends = ['page_type'];

    public function getPageTypeAttribute()
    {
    	switch ($this->type) {
    		case self::aboutusMain:
    			return self::aboutusMainName;
    			break;
    		case self::aboutus:
    			return self::aboutusName;
    			break;
    		case self::mission:
    			return self::missionName;
    			break;
    		case self::certificate:
    			return self::certificateName;
    			break;
    		case self::vacancy:
    			return self::vacancyName;
    			break;
    		case self::service:
    			return self::serviceName;
    			break;
    		case self::blog:
    			return self::blogName;
    			break;
    		
    		default:
    			return;
    			break;
    	}
    }

    public function status($status)
    {
    	return $this->where('status', $status);
    }

    public function type($type)
    {
    	return $this->where('type', $type)->where('status',true);
    }

}
