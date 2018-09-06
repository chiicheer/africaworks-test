<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;
use App\User;

class Country extends Model
{
    protected $fillable=array('name', 'cover_image', 'description',);

    public function companies()
    {
    	return $this->hasMany('App\Company');
    }
}
