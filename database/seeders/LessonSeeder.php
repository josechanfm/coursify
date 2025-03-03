<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Offer;
use Carbon\Carbon;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lessons')->truncate();
        DB::table('lesson_student')->truncate();
        // Loop through each offer ID (from 1 to 10)
        for ($offerId = 1; $offerId <= 10; $offerId++) {
            // Generate 15 lessons for each offer
            $offer=Offer::find($offerId);
            for ($i = 0; $i < 15; $i++) {
                $lesson=$offer->lessons()->create([
                    'staff_id' => $offer->teachers()->first()->id, // or assign a random staff ID if you have staff records
                    'classroom' => 'Classroom ' . rand(1, 5), // Random classroom assignment
                    'date' => Carbon::now()->addDays(rand(1, 30)), // Random future date
                    'start' => Carbon::now()->addDays(rand(1, 30))->setTime(rand(8, 17), 0), // Random start time between 8 AM and 5 PM
                    'end' => Carbon::now()->addDays(rand(1, 30))->setTime(rand(18, 21), 0), // Random end time between 6 PM and 9 PM
                ]);
                $offerStudentsIds=$offer->students->pluck('id');
                $lesson->students()->attach($offerStudentsIds,['attend'=>false]);
            }
        }
    }
}
