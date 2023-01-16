<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Order;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;
use PDF;
use Illuminate\Support\Facades\Storage;
use App\Mail\mailsend;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataExport;

class ReservationController extends Controller
{
    public function index()
    {
        $order_latest = Order::orderby('order_id','desc')->select('*')->pluck('reservation_id')->first();
        $orders = Order::with(['menus','reservations'])->where('reservation_id', $order_latest)->get(); 
        return view('transaction', compact('orders'));
    }
    
    public function storedine(Request $request)
    {
        $data= new Reservation();
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->email = $request->email;
        $data->phonenumber = 62 . $request->phonenumber;
        $data->datereservation = $request->datereservation;
        $data->timerange = $request->timerange;
        $data->reservationnotes = $request->reservationnotes;
        $data->reservation_type = "Dine - in";
        $data->status = "UNPAID";
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

    public function storedelivery(Request $request)
    {
        $data= new Reservation();
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->email = $request->email;
        $data->phonenumber = 62 . $request->phonenumber;
        $data->roomnumber = $request->roomnumber;
        $data->reservationnotes = $request->reservationnotes;
        $data->reservation_type = "Room - Delivery";
        $data->status = "UNPAID";
        $data->save();
        
        
        for ($i=1; $i <= $request->uniqId_delivery; $i++) { 
            $data2 = new Order();
            $temp = $request->qty_delivery+$i;
            $data2->menu_id = $request->{"menu_id_delivery".$i};
            $data2->qty = $request->{"qty_delivery".$i};
            $reservation_id = DB::table('reservations')->where('email', $data->email)->pluck('reservation_id')->first();
            $data2 ->reservation_id = $reservation_id;
            $data2->save();
        }
        
        return redirect('transactions');

        // return response()->json([
        //     'message' => 'Berhasil',
        // ],200);
    }

    public function print_receipt(Request $request, $id){
        $order_latest = Order::orderby('order_id','desc')->select('*')->pluck('reservation_id')->first();
        $orders = Order::with(['menus','reservations'])->where('reservation_id', $order_latest)->get(); 
        DB::table('reservations')->where('reservation_id', $id)->update(['status' => 'PAID/PROCESS']);

        $base64 = public_path('\images\ichiraku-logo-receipt.png');
        $image = base64_encode(file_get_contents($base64));

        $html = view('print_receipt', compact('orders', 'image'));
        $pdf = PDF::loadview('print_receipt', compact('orders', 'image'));
        return $pdf -> download('order_receipt_034'.$id.'.pdf');
        // $dompdf->loadHtml($html, 'UTF-8');
        // $dompdf->render();
        // $dompdf->stream('my.pdf',array('Attachment'=>0));
        // $pdf = PDF::loadview('print_receipt', compact('orders'));
        // $pdf->render();
        // $pdf->setPaper('Legal', 'horizontal');
        // return $pdf->stream('order_receipt.pdf', ["Attachment" => false]);
    }
    public function test(Request $request){
        
        $order_latest = Order::orderby('order_id','desc')->select('*')->pluck('reservation_id')->first();
        $orders = Order::with(['menus','reservations'])->where('reservation_id', $order_latest)->get();

        $image = base64_encode(Storage::get('images/ichiraku-logo-receipt.png'));
        return view('print_receipt', compact('orders','image'));
    }
    public function delete_data(Request $request){
        
        $order_latest = Order::orderby('order_id','desc')->select('*')->pluck('reservation_id')->first();
        $orders = Order::where('reservation_id', $order_latest)->delete();

        $reservation = Reservation::where('reservation_id', $order_latest)->delete();
        // $orders->delete();
        return redirect('/');
    }

    public function sendmail($id){
        $usermail = DB::table('reservations')->where('reservation_id', $id)->get('email');
        Mail::to($usermail)->send(new mailsend());
        return redirect('/');
    }

    public function export_excel()
    {
        return Excel::download(new DataExport, 'reservation.xlsx');
    }
}
