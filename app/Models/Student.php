<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nim'
    ];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function courses(){
        return $this->belongsToMany(Course::class,'students_courses');
    }
}
