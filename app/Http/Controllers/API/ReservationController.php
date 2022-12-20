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
        //get posts
        $reservations = Reservation::latest()->paginate(1);  
        $menus = Menu::latest()->paginate(1);      
        // $response['data'] = $reservations;

        //render view with posts
        return view('transaction', compact('menus','reservations'));
    }
    // public function getReservations(){
 
    //     $reservations = Reservation::orderby('id','desc')->select('*')->get(); 
         
    //     // Fetch all records
    //     $response['data'] = $employees;
    
    //     return response()->json($response);
    // }
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
        
        return redirect('getReservations');

        // return response()->json([
        //     'message' => 'Berhasil',
        // ],200);
    }
}
