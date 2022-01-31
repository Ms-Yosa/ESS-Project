<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'surname',
        'name',
        'middle_name',
        'email',
        'password',
        'age',
        'gender',
        'birth_year',
        'birth_month',
        'birth_day',
        'religion',
        'student_bloodtype',
        'guardian_surname',
        'guardian',
        'guardian_middle_name',
        'contact_number',
        'relation',
        'guardian_bloodtype',
        'address',
        'class_id'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Eloquent Relationships
     */

    public function getGrades(){
        return $this->hasMany(Grade::class,'user_id','id');
    }

    public function getFeedback(){
        return $this->hasMany(Feedback::class,'user_id','id');
    }

    public function classAssigned(){
        return $this->belongsTo(Classes::class, 'class_id');
    }
}
