<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable=['abbr','name_zh','name_en','remark'];

    public function courses(){
        return $this->hasMany(Course::class);
    }
}
