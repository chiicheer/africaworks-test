<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'gender', 'tel', 'birthday', 'university_name', 'university_degree', 'university_date', 'master_university', 'master_degree', 'master_date', 'company_name', 'position', 'period', 'company_name2', 'position2', 'period2',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function companies(){
        return $this->belongsToMany('App\Company', 'company__users');
    }

}
