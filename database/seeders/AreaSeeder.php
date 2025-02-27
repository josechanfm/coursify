<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // protected $fillable=['abbr','name_zh','name_en','remark'];
        $data=[
            ['abbr'=>'ACC','name_zh'=>'財務會計','name_en'=>'Accounting'],
            ['abbr'=>'WSET','name_zh'=>'WSET()葡萄酒課程','name_en'=>'WSET'],
            ['abbr'=>'BSN','name_zh'=>'商業及管理','name_en'=>'Business and Management'],
            ['abbr'=>'CMP','name_zh'=>'電腦科學','name_en'=>'Computer and Statistic'],
            ['abbr'=>'FCM','name_zh'=>'設施管理','name_en'=>'Facility Management'],
            ['abbr'=>'LAW','name_zh'=>'法律','name_en'=>'Law'],
            ['abbr'=>'FNN','name_zh'=>'金融','name_en'=>'Finance'],
            ['abbr'=>'TTT','name_zh'=>'師資培訓','name_en'=>'Train the trainer'],
            ['abbr'=>'EDC','name_zh'=>'教育科學','name_en'=>'Educaton'],
            ['abbr'=>'ART','name_zh'=>'美術','name_en'=>'Art'],
        ];
        foreach($data as $d){
            Area::create($d);
        }
    }
}
