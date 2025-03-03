<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $studentsData = [];

        for ($i = 0; $i < 100; $i++) {
            // Generate 8-digit code (first 2 digits are the year, followed by 6 random digits)
            $year = date('y'); // last two digits of the current year
            $randomDigits = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT); // generate 6 random digits
            $code = $year . $randomDigits;

            $studentsData[] = [
                'code' => $code,
                'name_zh' => $faker->name, // You can replace this with specific names if needed
                'name_en' => $faker->name,
                'dob' => $faker->date(),
                'gender' => $faker->randomElement(['M', 'F']),
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'industry' => $faker->word,
                'company' => $faker->company,
                'position' => $faker->word,
                'backup_phone' => $faker->phoneNumber,
                'id_type' => $faker->word,
                'id_num' => $faker->word,
                'id_copy_file' => null, // Assuming you want to leave this nullable
                'id_copy_name' => null, // Assuming you want to leave this nullable
            ];
        }

        // Insert data into the students table
        DB::table('students')->insert($studentsData);
    }
}
