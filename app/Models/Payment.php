<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'application_id',
        'datetime',
        'payment_type',
        'payment_checked',
        'tution_fee',
        'other_fee',
        'amount',
        'user_id',
        'tution_payment',
        'other_payment',
        'receipt_code',
        'refunded',
        'refunded_detail',
        'refunded_remark',
        'refunded_timestamp',
        'refunded_user_id',
        'refunded_confirm_date',    
    ];
    public function application(){
        return $this->belongsTo(Application::class);
    }
}
