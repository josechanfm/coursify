<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $casts=['extra'=>'json'];
    protected $fillable=[
        'offer_id',
        'code',
        'name_zh',
        'name_en',
        'dob',
        'gender',
        'id_type',
        'id_num',
        'email',
        'phone',
        'industry',
        'company',
        'position',
        'backup_phone',
        'education',
        'promotion',
        'school_num',
        'textbook_lang',
        'how_to_know',
        'extra',
        'status',
        'status_ignore',
        'candidate',
        'candidate_timestamp',
        'candidate_user_id',
        'student_id',
        'school_number'
    ];

    public function offer(){
        return $this->belongsTo(Offer::class);
    }
}
