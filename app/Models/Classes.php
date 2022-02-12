<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Classes
 * @package App\Models
 * @version November 17, 2021, 3:44 pm UTC
 *
 * @property string $class_name
 * @property string $class_code
 * @property string $level
 */
class Classes extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'classes';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'class_id';


    public $fillable = [
        'class_name',
        'class_code',
        'level',
        'faculty_id',
        // 'subject_id',
        'class_id',
        'day_id',
        'start_time',
        'end_time',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'class_id' => 'integer',
        'class_name' => 'string',
        'class_code' => 'string',
        'level' => 'string',
        'faculty_id' => 'integer',
        // 'subject_id' => 'integer',
        'class_id' => 'integer',
        'day_id' => 'integer',
        'start_time' => 'string',
        'end_time' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'class_name' => 'required|string|max:255',
        'class_code' => 'required|string|max:20|min:10|unique:classes',
        'level' => 'required|string|max:255',
        // 'faculty_id' => 'required|integer',
        // 'subject_id' => 'required|integer',
        'day_id' => 'required|integer',
        'start_time' => 'required|string',
        'end_time' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }

    public function getInstructor(){
        return $this->hasOne(Faculty::class,'id','faculty_id');
    }

    public function getStudents(){
        return $this->hasMany(User::class,'class_id','class_id');
    }

    public function getSubArea(){
        return $this->hasMany(SubArea::class,'class_id','class_id');
    }

    public function getSubjects(){
        return $this->hasManyThrough(Subject::class, SubArea::class,'class_id','subArea_id','id','id');
    }

}
