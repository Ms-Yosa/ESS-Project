<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubArea extends Model
{
    use HasFactory;

    public function subjects(){
        return $this->hasMany(Subject::class);
    }

    public function class(){
        return $this->belongsTo(Classes::class,'class_id');
    }
}
