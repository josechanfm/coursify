<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\Admin;
use App\Models\Team;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $adminRole=Role::firstOrCreate(['name'=>'admin']);
        // $organizerRole=Role::firstOrCreate(['name'=>'organizer']);
        // $masterRole=Role::firstOrCreate(['name'=>'master']);

        $user=Admin::create([
            'name' => 'Master',
            'email' => 'master@example.com',
            'password' => Hash::make('password'),
        ]);

        $user=Admin::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

    }
}
