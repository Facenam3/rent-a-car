<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalRates extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'rate'
    ];

    public function cars(){
        return $this->belongsTo(Cars::class);
    }
}
