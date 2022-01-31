<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public $fillable = [
        'first_period',
        'second_period',
        'third_period',
        'fourth_period',
        'final_rating'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'first_period' => 'string',
        'second_period' => 'string',
        'third_period' => 'string',
        'fourth_period' => 'string',
        'final_rating' => 'string',
        'subject_id' => 'integer',
        'user_id' => 'integer',
        'subArea_id' => 'integer'
    ];

    public static $rules = [

    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id','id');
    }

    public function subArea(){
        return $this->belongsTo(SubArea::class,'subArea_id');
    }
}
