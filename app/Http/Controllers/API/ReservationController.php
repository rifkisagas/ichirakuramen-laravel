<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Order;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function index()
    {
        $order_latest = Order::orderby('order_id','desc')->select('*')->pluck('reservation_id')->first();
        $orders = Order::with(['menus','reservations'])->where('reservation_id', $order_latest)->get(); 
        return view('transaction', compact('orders'));
    }

    public function test(Request $request){
        $order_latest = Order::orderby('order_id','desc')->select('*')->pluck('reservation_id')->first();
        $orders = Order::with(['menus','reservations'])->where('reservation_id', $order_latest)->get();

        return response()->json($orders);
    }
    
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
            $temp = $request->qty_+$i;
            $data2->menu_id = $request->{"menu_id_".$i};
            $data2->qty = $request->{"qty_".$i};
            $reservation_id = DB::table('reservations')->where('email', $data->email)->pluck('reservation_id')->first();
            $data2 ->reservation_id = $reservation_id;
            $data2->save();
        }
        
        return redirect('transactions');

        // return response()->json([
        //     'message' => 'Berhasil',
        // ],200);
    }
}
