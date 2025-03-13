<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable=['abbr','name_zh','name_en','remark'];

    public function info(){
        return (object)[
            'id'=>$this->id,
            'abbr'=>$this->abbr,
            'name_zh'=>$this->name_zh,
            'name_en'=>$this->name_en,
            'course_count'=>$this->courses->count()
        ];
    }
    public function courses(){
        return $this->hasMany(Course::class);
    }
}
