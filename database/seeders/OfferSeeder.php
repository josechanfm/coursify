<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course=Course::where('code','ACC001')->first();
        $data=[
            ['code'=>'ACC01-001','name_zh'=>$course->name_zh.' (第一班)'],
            ['code'=>'ACC01-002','name_zh'=>$course->name_zh.' (第二班)'],
            ['code'=>'ACC01-003','name_zh'=>$course->name_zh.' (第三班)'],
        ];
        $course->offers()->createMany($data);
    }
}
