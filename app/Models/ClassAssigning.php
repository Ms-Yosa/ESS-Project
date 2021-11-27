<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ClassAssigning
 * @package App\Models
 * @version November 26, 2021, 10:54 pm UTC
 *
 * @property integer $teacher_id
 * @property integer $class_schedule_id
 */
class ClassAssigning extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'class_assignings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'teacher_id',
        'class_schedule_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'class_assign_id' => 'integer',
        'teacher_id' => 'integer',
        'class_schedule_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'teacher_id' => 'required|integer',
        'class_schedule_id' => 'required|integer',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
