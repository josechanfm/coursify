<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Area;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $area=Area::where('abbr','ACC')->first();
        $data=[
            ['name_zh'=>'財務會計','name_en'=>'Accounting', 'type'=>'ABC'],
            ['name_zh'=>'財務會計','name_en'=>'Accounting', 'type'=>'ABC'],
            ['name_zh'=>'財務會計','name_en'=>'Accounting', 'type'=>'ABC'],
        ];
        $area->courses()->createMany($data);
    }
}
