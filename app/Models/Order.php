<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $fillable = ['menu_id', 'qty', 'reservation_id'];

    public function index(){
        $reservations = Order::latest()->paginate(1); 
    }

    public function orders(){
        return $this->belongsTo(Reservation::class,'reservation_id','reservation_id');
        
    }
}
