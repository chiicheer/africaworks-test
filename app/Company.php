<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Company_User;


class Company extends Model
{
    protected $fillable= array('country_id', 'title', 'description');

    public function country(){
    	return $this->belongsTo('App\Country');
    }

    public function users()
    {
    	return $this->belongsToMany('App\User', 'company__users');
    }


}
