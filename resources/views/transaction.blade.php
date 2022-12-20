<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body class="img-fluid transaction-bg">
  <div class="container" style="margin-top: 7%; z-index:99999">
    <div class="card ">
      <div class="card-body mx-4">
        <div class="container">
          <p class="my-5 mx-5" style="font-size: 30px;">Order Receipt</p>
          <div class="row">
            @foreach($menus as $key => $menu)
            @foreach($reservations as $key => $cust)
            <ul class="list-unstyled">
              <li class="text-black">{{ $cust->firstname ." ". $cust->lastname}} </li>
              <li class="text-muted mt-1"><span class="text-black">Order</span>#034{{ $cust->reservation_id }}</li>
              <li class="text-black mt-1">{{ $cust->created_at}}</li>
            </ul>
            <hr>
            <div class="col-xl-10">
              <p>{{$menu->nama_menu}}</p>
            </div>
            <div class="col-xl-2">
              <p class="float-end">Rp.{{$menu->harga}}
              </p>
            </div>
            <hr>
          </div>
          <div class="row">
            <div class="col-xl-10">
              <p>Consulting</p>
            </div>
            <div class="col-xl-2">
              <p class="float-end">$100.00
              </p>
            </div>
            <hr>
          </div>
          <div class="row">
            <div class="col-xl-10">
              <p>Support</p>
            </div>
            <div class="col-xl-2">
              <p class="float-end">$10.00
              </p>
            </div>
            <hr style="border: 2px solid black;">
          </div>
          <div class="row text-black">
    
            <div class="col-xl-12">
              <p class="float-end fw-bold">Total: $10.00
              </p>
            </div>
            <hr style="border: 2px solid black;">
          </div>
          @endforeach
          @endforeach
          <div class="text-center" style="margin-top: 12px">
            <p>To complete the transaction, please choose the payment method.</p>
          </div>
          <div class="text-center" style="margin-top: 30px;">
            <button  onclick="window.location='{{ url("order") }}'"type="button" class="btn btn-secondary">Cancel</button>
            <button  type="button" class="btn btn-danger" style="background-color: #D75053" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btn-reset">Payment</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</body>
{{-- @include('layouts.foot') --}}
@include('layouts.script')
<script>
AOS.init();
</script>

</html>