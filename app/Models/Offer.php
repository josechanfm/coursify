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
        'offer_start',
        'offer_end',
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

    protected $appends = ['application_count'];

    public function info(){
        return (object)[
            'code'=>$this->code,
            'name_zh'=>$this->name_zh,
            'name_en'=>$this->name_en,
        ];
    }

    public function getApplicationCountAttribute()
    {
        return $this->applications->count();
    }
    
    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function teachers(){
        return $this->belongsToMany(Staff::class,'offer_staff','offer_id','staff_id');
    }

    public function lessons(){
        return $this->hasMany(Lesson::class);
    }

    public function status(){
        return $this->hasMany(OfferStatus::class);
    }

    public function students(){
        return $this->belongsToMany(Student::class);
    }

    public function applications(){
        return $this->hasMany(Application::class);
    }

}
