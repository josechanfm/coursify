<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Config;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'key' => 'course_types', 
            'value' => [
                ['value'=>'LCT', 'label' => '課程'],
                ['value'=>'WSET', 'label' => '葡萄酒課程'],
                ['value'=>'WRK', 'label' => '工作坊'],
                ['value'=>'SMN', 'label' => '講座'],
                ['value'=>'CAU', 'label' => 'CAEU'],
                ['value'=>'OTH', 'label' => '其他']
            ],
        ];
        Config::create($data);  
        $data = [
            'key' => 'certificate_types', 
            'value' => [
                ['value'=>'CRT', 'label' => '證書課程'],
                ['value'=>'NOR', 'label' => '一般課程'],
            ],
        ];
        Config::create($data);  
        $data = [
            'key' => 'language_types', 
            'value' => [
                ['value'=>'CNT', 'label' => '廣東話'],
                ['value'=>'MND', 'label' => '普通話'],
                ['value'=>'ENG', 'label' => '英語'],
                ['value'=>'OTH', 'label' => '其他'],
            ],
        ];
        Config::create($data);  
        $data = [
            'key' => 'education_levels', 
            'value' => [
                ['value'=>'NON', 'label' => '沒有學歷'],
                ['value'=>'PRI', 'label' => '小學'],
                ['value'=>'SEC', 'label' => '中學'],
                ['value'=>'HGH', 'label' => '大學'],
                ['value'=>'UND', 'label' => '大學以上'],
                ['value'=>'MST', 'label' => '碩士'],
                ['value'=>'PHD', 'label' => '博士或以上'],
            ],
        ];
        $data = [
            'key' => 'form_options', 
            'value' => [
                ['value'=>'CERT_NAME', 'label' => '證書印刷名稱'],
                ['value'=>'EDUCATION_LEVEL', 'label' => '學歷程度'],
                ['value'=>'PROMOTION_CODE', 'label' => '推廣代碼'],
            ],
        ];
        Config::create($data);  
    }
}
