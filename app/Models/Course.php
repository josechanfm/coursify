<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable=[
        'area_id',
        'code',
        'name_zh',
        'name_en',
        'type',
        'description',
        'assessment',
        'mehtod',
        'target',
        'prerequisite',
        'conduct_lang',
        'handout_lang',
        'certificate',
        'hours',
        'tution_fee',
        'other_fee',
        'payment',
        'quota',
        'active',
        'remark',
    ];

    public function area(){
        return $this->belongsTo(Area::class);
    }
    public function offers(){
        return $this->hasMany(Offer::class);
    }
}
