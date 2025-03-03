<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use App\Models\Offer;
use App\Models\Staff;
use App\Models\Student;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Truncate tables
        DB::table('offer_student')->truncate();
        DB::table('offer_staff')->truncate();
        DB::table('offers')->truncate(); // Make sure the table name matches your database

        $courses=Course::all();
        foreach($courses as $i=>$course){
            for($j=1; $j<=3; $j++){
                $applyStartDate = now()->addDays(rand(-30, 30));
                $offer=Offer::create([
                    'course_id'=>$course->id,
                    'code'=>$course->code.'-00'.$j,
                    'name_zh'=> $course->name_zh .'('.$j.')',
                    'apply_start'=>$applyStartDate,
                    'apply_end'=>$applyStartDate->copy()->addDays(rand(1, 30)),
                ]);
                $offer->teachers()->attach(rand(1,10));
                $randomStudentIds = Student::inRandomOrder()->take(10)->pluck('id');
                $offer->students()->attach($randomStudentIds);

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
                    "type" => "radio",
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
