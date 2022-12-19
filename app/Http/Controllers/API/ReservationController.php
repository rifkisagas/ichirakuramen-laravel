<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $data= new Reservation();
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->email = $request->email;
        $data->phonenumber = $request->phonenumber;
        $data->datereservation = $request->datereservation;
        $data->timerange = $request->timerange;
        $data->reservationnotes = $request->reservationnotes;

        $data->save();

        
        for ($i=1; $i <= $request->uniqId ; $i++) { 
            $data2 = new Order();
            $data2->menu_id = $request->menu_id_+$i;
            $data2->qty = $request->qty_+$i;
            $reservation_id = DB::table('reservations')->where('email', $data->email)->pluck('reservation_id')->first();
            $data2 ->reservation_id = $reservation_id;
            $data2->save();
        }
        
        
        return response()->json([
            'message' => 'Berhasil',
        ],200);
    }
}
