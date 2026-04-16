<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferField extends Model
{
    use HasFactory;
    protected $with=['template'];

    public function offer(){
        return $this->belongsTo(Offer::class);
    }

    public function template(){
        return $this->hasOne(OfferTemplateField::class, 'code', 'code');
    }
}
