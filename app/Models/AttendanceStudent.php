<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceStudent extends Model
{
    use HasFactory;

    public $table = 'attendance_students';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'id';

    public $fillable = [
        'date',
        'class_id',
        'faculty_id',
        'user_id',
        'status',
        'description',
    ];
}
