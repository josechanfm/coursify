<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
               // Sample data
               $staffData = [
                ['code' => '001', 'name_zh' => '张伟', 'name_en' => 'Zhang Wei'],
                ['code' => '002', 'name_zh' => '李娜', 'name_en' => 'Li Na'],
                ['code' => '003', 'name_zh' => '王芳', 'name_en' => 'Wang Fang'],
                ['code' => '004', 'name_zh' => '刘洋', 'name_en' => 'Liu Yang'],
                ['code' => '005', 'name_zh' => '陈杰', 'name_en' => 'Chen Jie'],
                ['code' => '006', 'name_zh' => '杨静', 'name_en' => 'Yang Jing'],
                ['code' => '007', 'name_zh' => '黄磊', 'name_en' => 'Huang Lei'],
                ['code' => '008', 'name_zh' => '赵丽', 'name_en' => 'Zhao Li'],
                ['code' => '009', 'name_zh' => '周强', 'name_en' => 'Zhou Qiang'],
                ['code' => '010', 'name_zh' => '吴敏', 'name_en' => 'Wu Min'],
            ];
    
            // Insert data into the staff table
            DB::table('staffs')->insert($staffData);
    }
}
