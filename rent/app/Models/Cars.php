<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    protected $fillable = [
        'model',
        'type',
        'specification',
        'availability',
        'image'
    ];

    public function bookings() {
        return $this->hasMany(Booking::class);
    }
}
