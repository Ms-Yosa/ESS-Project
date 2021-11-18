<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ClassScheduling
 * @package App\Models
 * @version November 7, 2021, 6:35 pm UTC
 *
 * @property integer $subject_id
 * @property integer $level_id
 * @property integer $class_id
 * @property integer $day_id
 * @property string $start_time
 * @property string $end_time
 * @property boolean $status
 */
class ClassScheduling extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'class_schedulings';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'schedule_id';


    public $fillable = [
        'subject_id',
        'level_id',
        'class_id',
        'day_id',
        'start_time',
        'end_time',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'schedule_id' => 'integer',
        'subject_id' => 'integer',
        'level_id' => 'integer',
        'class_id' => 'integer',
        'day_id' => 'integer',
        'start_time' => 'string',
        'end_time' => 'string',
        'status' => 'boolean'
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
        'start_time' => 'required|string',
        'end_time' => 'required|string',
        'status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
