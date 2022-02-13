<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAttendance extends Model
{
    use HasFactory;

    public $table = 'student_attendance';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'id';



    public $fillable = [
        'date',
        'user_id',
        'status',
        'description',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    
}
