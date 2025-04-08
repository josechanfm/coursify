<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    protected $appends = ['application_count', 'student_count', 'accept_count','hours'];

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
    public function getStudentCountAttribute()
    {
        return $this->students->count();
    }
    
    public function getAcceptCountAttribute()
    {
        return $this->applications->where('status', 'Accept')->count();
    }
    public function getHoursAttribute()
    {
        return $this->course->hours;
    }

    public static function available(){
        $availableOffers = Offer::where('apply_start', '<=', now())
                ->where('apply_end', '>=', now())
                ->get();
        return $availableOffers;
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
    // 獲取今日及今日之前的 lessons
    public function getLessonsBeforeToday()
    {
        return $this->lessons()
            ->where('date', '<=', Carbon::today())
            ->get();
    }
    public function attendedLessonStudent($studentId)
    {
        // 某學生的 attend 的課堂
        return $this->lessons()
            ->whereHas('students', function ($query) use ($studentId) {
                $query->where('student_id', $studentId)
                      ->where('lesson_student.attend', 1);
            })->count();
    }
    public function attendanceRateStudent($studentId)
    {
        $totalLessons = $this->lessons()->count();
        if ($totalLessons === 0) {
            return 0.0; // 如果没有课程，返回 0
        }

        $attendedLessonsCount = $this->attendedLessonStudent($studentId);
        return $attendedLessonsCount / $totalLessons;
    }

    // 计算所有学生在课程中的出席率
    public function attendanceRateStudents()
    {
        $currentLessons = $this->getLessonsBeforeToday();
        $totalLessons = $this->lessons();
        if ($totalLessons === 0) {
            return []; // 如果没有课程，返回空数组
        }

        // 获取 offer 的学生的 ID
        $students = $this->students;

        // 计算每个学生的出席率
        $students->map(function ($student) use ($currentLessons, $totalLessons) {
            $student->current_attendance_rate = $this->attendedLessonStudent($student->id) / $currentLessons->count();
            $student->total_attendance_rate = $this->attendedLessonStudent($student->id) / $totalLessons->count();
        });

        return $students;
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
