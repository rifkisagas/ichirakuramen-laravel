<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Session;

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

        $data2 = new Order();
        $data2->menu_id = $request->menu_id;
        $data2->qty = $request->qty;
        $reservation_id = DB::table('reservations')->where('email', $data->email)->pluck('reservation_id')->first();
        $data2 ->reservation_id = $reservation_id;
        
        
        $data2->save();
        // Session::put('menu_id', $menu_id);
        // Session::put('qty', $qty);
        // Session::put('reservation_id' ,$reservation_id);

        // return redirect()->action('OrderController@store', ['reservation_id' => $reservation_id]);
        return response()->json([
            'message' => 'Berhasil',
            'reservation_id' => $reservation_id,
        ],200);
    }
}
