<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubArea extends Model
{
    use HasFactory;
    public $table = 'sub_areas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'id';



    public $fillable = [
        'name',
        'class_id',
    ];

    public function subjects(){
        return $this->hasMany(Subject::class,'subArea_id','id');
    }

    public function class(){
        return $this->belongsTo(Classes::class,'class_id');
    }

    public function grade(){
        return $this->belongsTo(Grade::class,'subArea_id');
    }
}
