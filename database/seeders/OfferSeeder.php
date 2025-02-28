<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Offer;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $course=Course::where('code','ACC001')->first();
        // $data=[
        //     ['code'=>'ACC01-001','name_zh'=>$course->name_zh.' (第一班)'],
        //     ['code'=>'ACC01-002','name_zh'=>$course->name_zh.' (第二班)'],
        //     ['code'=>'ACC01-003','name_zh'=>$course->name_zh.' (第三班)'],
        // ];
        // $course->offers()->createMany($data);

        $courses=Course::all();
        foreach($courses as $i=>$course){
            for($j=1; $j<=3; $j++){
                $applyStartDate = now()->addDays(rand(-30, 30));
                Offer::create([
                    'course_id'=>$course->id,
                    'code'=>$course->code.'-00'.$j,
                    'name_zh'=> $course->name_zh .'('.$j.')',
                    'apply_start'=>$applyStartDate,
                    'apply_end'=>$applyStartDate->copy()->addDays(rand(1, 30)),
                ]);
    
            }
        }

        Offer::find(1)->update([
            'form_options'=>["CERT_NAME","EDUCATION_LEVEL","PROMOTION_CODE"],
            'form_extra'=>[
                [
                    "name" => "language",
                    "type" => "input",
                    "label" => "教材語言"
                ],
                [
                    "name" => "question",
                    "type" => "select",
                    "options" => [
                        [
                            "value" => "FB",
                            "label" => "Facebook"
                        ],
                        [
                            "value" => "IG",
                            "label" => "Instagram"
                        ],
                        [
                            "value" => "OT",
                            "label" => "其它"
                        ]
                    ],
                    "label" => "如何識識我們?"
                ]
            ],
        ]);
    }
}
