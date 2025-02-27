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
    }
}
