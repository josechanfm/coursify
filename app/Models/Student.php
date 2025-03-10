<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=['code','name_zh','name_en','gender','dob','id_type','id_num','phone','email'];
    public function offers(){
        return $this->belongsToMany(Offer::class);
    }
    public function applications(){
        return $this->hasMany(Application::class);

    }

}
