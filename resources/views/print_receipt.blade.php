<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @foreach($orders as $key => $order)
    <title>Order ID #034{{$order->reservations->reservation_id}}</title>
    @endforeach
    <!-- Favicon -->
    <link rel="icon" href="./images/favicon.png" type="image/x-icon" />
    <!-- Invoice styling -->
    <style>
      body {
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        text-align: center;
        color: #777;
      }

      body h1 {
        font-weight: 300;
        margin-bottom: 0px;
        padding-bottom: 0px;
        color: #000;
      }

      body h3 {
        font-weight: 300;
        margin-top: 10px;
        margin-bottom: 20px;
        font-style: italic;
        color: #555;
      }

      body a {
        color: #06f;
      }

      .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
      }

      .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
        border-collapse: collapse;
      }

      .invoice-box table td {
        padding: 5px;
        vertical-align: top;
      }

      .invoice-box table tr td:nth-child(2) {
        text-align: right;
      }

      .invoice-box table tr.top table td {
        padding-bottom: 20px;
      }

      .invoice-box table tr.top table td.title {
        font-size: 30px;
        line-height: 30px;
        /* background-image: url('images/ichiraku-logo-receipt.png'); */
        color: #333;
      }

      .invoice-box table tr.information table td {
        padding-bottom: 40px;
      }

      .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
      }

      .invoice-box table tr.details td {
        padding-bottom: 20px;
      }

      .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
      }

      .invoice-box table tr.item.last td {
        border-bottom: none;
      }

      .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
      }

      @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
          width: 100%;
          display: block;
          text-align: center;
        }

        .invoice-box table tr.information table td {
          width: 100%;
          display: block;
          text-align: center;
        }
      }
    </style>
  </head>
  <body>
    <div class="invoice-box">
      <table>
        <tr class="top">
          <td colspan="4">
            <table>
              <tr>
                <td class="title">
                  <span>Order Receipt</span>
                  {{-- <img src="
                  @php
                   $base64 = public_path('\images\ichiraku-logo-receipt.png');
                   $image = base64_encode(file_get_contents($base64));    
                  @endphp
                  " alt="logo"/> --}}
                </td>
      @php
      $total = 0;
      @endphp
      @foreach($orders as $key => $order)
      @if($key == 0)
                <td> Order ID <a style="color: grey">#034{{ $order->reservations->reservation_id }} </a><br /> Order Type : {{$order->reservations->reservation_type}}</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr class="information">
          <td colspan="4">
            <table>
              <tr>
                <td> Customer : {{ $order->reservations->firstname ." ". $order->reservations->lastname}}  <br /> Email : {{ $order->reservations->email}}<br /> Phone Number : {{ $order->reservations->phonenumber}} </td>
                @if($order->reservations->reservation_type == "Dine - in")
                <td> Date Reservation : {{ $order->reservations->datereservation}} <br /> Time Reservation : {{ $order->reservations->timerange}} WIB <br /> Status : <a style="color: green">Paid<a></td>
                @else
                <td> Room Number : {{ $order->reservations->roomnumber}} <br /> Status : <a style="color: green">Paid<a></td>
                @endif
              </tr>
            </table>
          </td>
        </tr>
        <tr class="heading">
          <td>Menu</td>
          <td style="text-align: left;">Qty</td>
          <td>Price</td>
          <td>Amount</td>
        </tr>
      @php
      $order_id = $order->reservations->reservation_id;
      @endphp
      @endif
        <tr class="item">
          <td>{{$order->menus->nama_menu}}</td>
          <td style="text-align: left;">{{$order->qty}}</td>
          <td>Rp.{{$order->menus->harga}}</td>
          <td>Rp.{{$order->menus->harga * $order->qty}}</td>
        </tr>
      @php
      $total = $total + $order->menus->harga * $order->qty;
      @endphp
      @endforeach
        <tr class="total">
          <td></td>
          <td></td>
          <td style="text-align: right;"><b>Total :</b></td>
          <td>Rp.{{$total}}</td>
        </tr>
        <tr>
          <td>*Please bring this receipt when <br/> you come to the restaurant as a <br/> <b>form of validation</b></td>
          <td></td>
          {{-- <td><img src="{{URL::to('images/qr.jpg')}}" style="max-width: 100%; width:80px;"></td> --}}
          <td></td>
        </tr>
      </table>
    </div>
  </body>
</html>