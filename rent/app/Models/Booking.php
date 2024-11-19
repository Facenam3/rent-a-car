<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
   use HasFactory;

   protected $fillable = [
    'user_id',
    'car_id',
    'rent_date',
    'return_date',
    'rental_car_price',
    'status'
   ];

   public function user() {
      return $this->belongsTo(User::class);
   }

   public function cars(){
      return $this->belongsTo(Cars::class);
   }

   public function payment() {
      return $this->hasOne(Payment::class);
   }
}
