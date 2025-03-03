<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str; // Import the Str facade

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Loop to create 10 payment records
                for ($i = 1; $i <= 10; $i++) {
                    $tutionFee = rand(1000, 5000); // Random tuition fee between 1000 and 5000
                    $otherFee = rand(0, 1000); // Random other fee between 0 and 1000
        
                    DB::table('payments')->insert([
                        'application_id' => $i, // Assuming application IDs are 1 to 10
                        'datetime' => Carbon::now()->subDays(rand(0, 30)), // Random datetime within the last 30 days
                        'payment_type' => strtoupper(Str::random(3)), // Random 3 character uppercase payment type
                        'payment_checked' => rand(0, 1) ? true : false, // Random boolean value
                        'tution_fee' => $tutionFee,
                        'other_fee' => $otherFee,
                        'amount' => $tutionFee + $otherFee, // Total amount computation
                        'user_id' => rand(1, 10), // Assuming user IDs are between 1 and 10
                        'tution_payment' => 'Payment for tuition fee for application ' . $i,
                        'other_payment' => 'Other payments details for application ' . $i,
                        'receipt_code' => strtoupper(Str::random(10)), // Random 10 character uppercase receipt code
                    ]);
                }
    }
}
