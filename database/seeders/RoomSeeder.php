<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\Room;
use App\Models\Team;


class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Room::create([
            'code' => 'S01',
            'type' => 'LCT',
            'name' => '演講室',
            'seats' => 100,
            'location' => '學院8樓',
            'description' => '',
        ]);

        Room::create([
            'code' => 'R09',
            'type' => 'CLS',
            'name' => '16樓9號室',
            'seats' => 25,
            'location' => '學院16樓',
            'description' => '',
        ]);


    }
}
