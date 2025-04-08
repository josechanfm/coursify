<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Application extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

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
    protected $with=['media'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('receipt');
    }
    public function registerMediaConversions(?Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Fit::Contain, 300, 300)
            ->nonQueued();
    }

    public function offer(){
        return $this->belongsTo(Offer::class);
    }
    public function offerInfo(){
        return $this->belongsTo(Offer::class,'offer_id')->select('id', 'code', 'name_zh', 'name_en');
    }
    public function payment(){
        return $this->hasOne(Payment::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function checkAndCreate($data)
    {
        // 检查 id_type + id_num 组合是否唯一
        if (Application::where('offer_id', $data['offer_id'])
                ->where('id_type', $data['id_type'])
                ->where('id_num', $data['id_num'])
                ->exists()) {
            return back()->withErrors(['id_num' => '已報讀該課程。']);
        }

        // 创建 Application
        $application = Application::create($data);

        return $application;
    }
}
