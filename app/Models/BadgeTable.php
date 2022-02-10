<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BadgeTable extends Model
{
    use HasFactory;

    public function badge(){
        return $this->belongsToMany(Badge::class);
    }
}
