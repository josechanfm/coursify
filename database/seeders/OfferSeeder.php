<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Area;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $area=Area::where('abbr','ACC')->first();
        $course=$area->courses()->first();
        $data=[
            ['name_zh'=>$course->name_zh.' (第一班)'],
            ['name_zh'=>$course->name_zh.' (第二班)'],
            ['name_zh'=>$course->name_zh.' (第三班)'],
        ];
        $course->offers()->createMany($data);
    }
}
