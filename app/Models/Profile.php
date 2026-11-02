<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'contact',
        'email',
        'address',
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
