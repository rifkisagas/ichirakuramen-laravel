<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reservation extends Model
{
    use HasFactory;

    public $fillable = ['reservation_id' , 'firstname', 'lastname', 'email', 'phonenumber',
                        'datereservation', 'timerange', 'reservationnotes'];

    public function index(){
        $reservations = Reservation::latest()->paginate(5); 
    }

    // public function konsultan(){
    //     return $this->belongsTo(DaftarKonsultan::class,'konsultan_id','id');   
    // }
}
