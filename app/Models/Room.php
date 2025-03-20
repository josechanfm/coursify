<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    /**
     * 获取在某个时间范围内可用的教室
     *
     * @param string $startTime 查询的开始时间
     * @param string $endTime 查询的结束时间
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getAvailableRooms($type, $date, $startTime, $endTime)
    {
        // 获取已被占用的教室 ID
        $bookedRoomIds = Lesson::where('date', $date) // 限定日期
        ->where(function ($query) use ($startTime, $endTime) {
            // 时间范围重叠的条件
            $query->where(function ($query) use ($startTime, $endTime) {
                $query->where('start', '<', $endTime)
                      ->where('end', '>', $startTime);
            });
        })->pluck('room_id');

        
        // 返回未被占用的教室
        return self::whereNotIn('id', $bookedRoomIds)->where('type', $type)->get();
    }
}
