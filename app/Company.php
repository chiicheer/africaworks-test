<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\User;


class Company extends Model
{
    protected $fillable= array('country_id', 'cover_image1', 'cover_image2', 'cover_image3', 'title', 'description', 'job_content', 'place', 'relate', 'role', 'salary', 'welfare', 'time', 'skill', 'apply_way', 'company_name', 'company_place', 'employee', 'company_type', 'company_content',);

    public function country(){
    	return $this->belongsTo('App\Country');
    }

    public function users()
    {
    	return $this->belongsToMany('App\User', 'company__users');
    }


}
