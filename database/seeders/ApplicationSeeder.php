<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Offer;
class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offer=Offer::find(1);
        $offer->applications()->create([
            'name_zh' => '陳大文',
            'name_en' => 'John Doe',
            'dob' => '1990-01-01',
            'gender' => 'M',
            'email' => 'user1@example.com',
            'phone' => '12345678',
            'id_type' => 'HK',
            'id_num' => 'A1234567',
            'status'=>'Accept'
        ]);
        $offer->applications()->create([
            'name_zh' => '陳小文',
            'name_en' => 'Jane Doe',
            'dob' => '1990-01-02',
            'gender' => 'F',
            'email' => 'user2@example.com',
            'phone' => '87654321',
            'id_type' => 'HK',
            'id_num' => 'A7654321',
            'status'=>null
        ]);
        $offer=Offer::find(2);
        $offer->applications()->create([
            'name_zh' => '陳...',
            'name_en' => 'Simon',
            'dob' => '1980-01-01',
            'gender' => 'F',
            'email' => 'user3@example.com',
            'phone' => '87654311',
            'id_type' => 'HK',
            'id_num' => 'A1111111',
            'status'=>null
        ]);
    }
}
