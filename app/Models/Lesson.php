<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $with=['teacher'];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function teacher(){
        return $this->belongsTo(Staff::class,'staff_id');
    }

    public function students(){
        return $this->belongsToMany(Student::class,'lesson_student','lesson_id','student_id');
    }
}
