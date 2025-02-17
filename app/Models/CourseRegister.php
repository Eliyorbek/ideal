<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseRegister extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function course(){
        return $this->belongsTo(Course::class , 'course_id');
    }
}
