<?php

namespace App;
use App\Role;
use App\CompanyDetail; 
use App\DriverDetails; 
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
      'firstname','company_detail_id','lastname','phone' ,'email', 'password','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    
    public function driverDetail(){
        return $this->hasOne('App\DriverDetails');
    }
    public function companyDetail(){
        return $this->belongsTo('App\CompanyDetail');
    }
}
