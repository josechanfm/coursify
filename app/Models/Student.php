<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Student extends Model
{
    use HasFactory;
    protected $fillable=[
        'code',
        'user_id',
        'name_zh',
        'name_en',
        'gender',
        'dob',
        'id_type',
        'id_num',
        'phone',
        'backup_phone',
        'email',
        'industry',
        'company',
        'position',
    ];

    public function offers(){
        return $this->belongsToMany(Offer::class);
    }
    public function applications(){
        return $this->hasMany(Application::class);
    }

    public function lessons(){
        return $this->belongsToMany(Lesson::class,'lesson_student','student_id','lesson_id');
    }

    public function generateCode(){
        $today = Carbon::today()->format('ymd'); // 例如: 250326
        $todayLastStudent = Student::where('code', 'like', $today . '%')
            ->orderBy('code', 'desc')
            ->first();
        $lastNumber = $todayLastStudent 
            ? intval(substr($todayLastStudent->student_code, -4)) + 1 
            : 1;
        return $today . substr( '0000'.$lastNumber , -1, 4) ;
    }

    public function checkAndCreate($data, $user)
    {
        // 检查 id_type + id_num 组合是否唯一
        if (Student::where('id_type', $data['id_type'])
                ->where('id_num', $data['id_num'])
                ->exists()) {
            return null;
            // 已經有學生記錄
        }

        $student = Student::create([ 
            'code' => $this->generateCode(),
            'user_id' => $user->id,
            ...$data 
        ]);
        return $student;
    }
}
