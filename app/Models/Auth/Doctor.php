<?php

namespace App\Models\Auth;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Auth\traits\DoctorRelationship;
class Doctor extends Authenticatable
{
    use Notifiable, DoctorRelationship;

    protected $guard = 'doctor';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','image','department_id','personal_statement'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getImageAttribute($image)
    {
    	return \Storage::url('public/uploads/doctors/'.$image);
    }

}
