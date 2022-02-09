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
    // use SoftDeletes;

    use HasFactory;

    public $table = 'subjects';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'id';



    public $fillable = [
        'subject_name',
        'subArea_id',
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
        'id' => 'integer',
        'subject_name' => 'string',
        'subArea_id' => 'string',
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
        'subArea_id' => 'string|max:255',
        'subject_code' => 'required|string|max:255',
        'description' => 'required|string',
        'status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function class()
    {
        return $this->belongsToMany(Classes::class);
    }

    public function subArea(){
        return $this->belongsTo(SubArea::class,'subArea_id');
    }

    public function getGrades(){
        return $this->hasMany(Grade::class,'subject_id');
    }

}
