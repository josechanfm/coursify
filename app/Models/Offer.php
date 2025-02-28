<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable=[
        'organizer_id',
        'course_id',
        'code',
        'name_zh',
        'name_en',
        'apply_start',
        'apply_end',
        'application',
        'front_end',
        'application_update',
        'days',
        'dsej',
        'seats',
        'discount',
        'credit',
        'reference',
        'remark',
        'special_member_fee',
        'membership_fee',
        'material_fee',
        'headphone_fee',
        'company_pay',
        'trainer_rate',
        'transportation_fee',
        'offer_other_fee',
        'form_options',
        'form_extra',
    ];
    protected $casts=[
        'application'=>'boolean',
        'front_end'=>'boolean',
        'dsej'=>'boolean',
        'form_options'=>'array',
        'form_extra'=>'json',
    ];
    
    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function teachers(){
        return $this->belongsToMany(Staff::class);
    }

    public function lessongs(){
        return $this->hasMany(Lesson::class);
    }

    public function students(){
        return $this->belongsToMany(Student::class);
    }

}
