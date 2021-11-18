<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Subject
 * @package App\Models
 * @version November 7, 2021, 6:32 pm UTC
 *
 * @property string $subject_name
 * @property string $subject_code
 * @property string $description
 * @property boolean $status
 */
class Subject extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'subjects';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'subject_id';



    public $fillable = [
        'subject_name',
        'subject_code',
        'description',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'subject_id' => 'integer',
        'subject_name' => 'string',
        'subject_code' => 'string',
        'description' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'subject_name' => 'required|string|max:255',
        'subject_code' => 'required|string|max:255',
        'description' => 'required|string',
        'status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

}
