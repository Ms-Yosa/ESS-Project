<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ClassAssigning
 * @package App\Models
 * @version November 7, 2021, 6:34 pm UTC
 *
 * @property integer $subject_id
 * @property integer $level_id
 * @property integer $classroom_id
 * @property integer $day_id
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
        'subject_id',
        'level_id',
        'class_id',
        'day_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'class_assign_id' => 'integer',
        'subject_id' => 'integer',
        'level_id' => 'integer',
        'class_id' => 'integer',
        'day_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'subject_id' => 'required|integer',
        'level_id' => 'required|integer',
        'class_id' => 'required|integer',
        'day_id' => 'required|integer',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
