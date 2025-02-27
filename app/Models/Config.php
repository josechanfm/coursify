<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;
    protected $fillable = ['key', 'value','remark'];   
    protected $casts = ['value' => 'json'];

    public function setValueAttribute($value)
    {
        // Use JSON_UNESCAPED_UNICODE when encoding
        $this->attributes['value'] = json_encode($value, JSON_UNESCAPED_UNICODE);
    }
    
    public static function get($key)
    {
        $config = Config::where('key', $key)->first();
        return $config ? $config->value : null;
    }
}
