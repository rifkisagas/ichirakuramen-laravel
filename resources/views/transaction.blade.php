<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body class="img-fluid transaction-bg">
  <div class="container" style="margin-top: 7%; z-index:99999">
    <div class="card ">
      <div class="card-body mx-4">
        <div class="container">
          <p class="my-5 mx-5" style="font-size: 30px;">Order Receipt</p>
          <div class="container-sm">
            @php
            $total = 0;
            @endphp
            @foreach($orders as $key => $order)
            @if($key == 0)
            <div class="row">
              <ul class="list-unstyled col-xl-6">
                <div class="row">
                  <div class="col-xl-3">
                    <li class="text-black">Customer</li>
                    <li class="text-muted mt-1"><span class="text-black">Order ID</span></li>
                    <li class="text-black mt-1">Created at</li>
                  </div>
                  <div class="col-xl-1">
                    <li class="text-black"> : </li>
                    <li class="text-black mt-1"> : </li>
                    <li class="text-black mt-1"> : </li>
                  </div>
                  <div class="col-xl-7">
                    <li class="text-black"> {{ $order->reservations->firstname ." ". $order->reservations->lastname}} </li>
                    <li class="text-muted mt-1"> #034{{ $order->reservations->reservation_id }}</li>
                    <li class="text-black mt-1">{{ $order->reservations->created_at}}</li>
                  </div>
                </div>
              </ul>
              <ul class="list-unstyled col-xl-6">
                <div class="row">
                  <div class="col-xl-4">
                    <li class="text-black">Date Reservation</li>
                    <li class="text-muted mt-1"><span class="text-black">Time Reservation</span></li>
                    <li class="text-black mt-1">Reservation Notes</li>
                  </div>
                  <div class="col-xl-1">
                    <li class="text-black"> : </li>
                    <li class="text-black mt-1"> : </li>
                    <li class="text-black mt-1"> : </li>
                  </div>
                  <div class="col-xl-7">
                    <li class="text-black"> {{ $order->reservations->datereservation}} </li>
                    <li class="text-black mt-1">{{ $order->reservations->timerange}} WIB</li>
                    {{-- @php
                    $notes = $order->reservation->reservationnotes;
                    @endphp --}}
                    @if (!empty($order->reservation->reservationnotes))
                    <li class="text-black mt-1">{{ $order->reservations->reservationnotes}}</li>
                    @else
                    <li class="text-black mt-1">-</li>
                    @endif
                  </div>
                </div>
              </ul>
            </div>
          
            <div class="row ">
              <div class="col-xl-3">
                <p>Menu</p>
              </div>
              <div class="col-xl-7">
                <p>Qty</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end">Price</p>
              </div>
            </div>
            <hr>
            @php
            $order_id = $order->reservations->reservation_id;
            @endphp
            @endif
            <div class="row">
              <div class="col-xl-3">
                <p>{{$order->menus->nama_menu}}</p>
              </div>
              <div class="col-xl-7">
                <p>{{$order->qty}}</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end">Rp.{{$order->menus->harga}}
                </p>
              </div>
              <hr>
            </div>
            @php
            $total = $total + $order->menus->harga;
            @endphp
            @endforeach
            <div class="row text-black">
              <div class="col-xl-12">
                <p class="float-end fw-bold">Total: Rp.{{$total}}
                </p>
              </div>
              <hr style="border: 2px solid black;">
            </div>
          </div>
          <div class="text-center" style="margin-top: 12px">
            <p>To complete the transaction, please choose the payment method.</p>
          </div>
          <div class="text-center" style="margin-top: 30px;">
            <button  type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#cancel">Cancel</button>
            <button  type="button" class="btn btn-danger" style="background-color: #D75053" data-bs-toggle="modal" data-bs-target="#payment" id="btn-reset">Payment</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="payment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        {{-- <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> --}}
        <div class="modal-body">
          <div class="col-12 mt-4">
            <div class="card p-3">
              <p class="mb-0 fw-bold h4">Payment Methods</p>
            </div>
          </div>
          <div class="col-12">
            <div class="card p-3">
              <div class="card-body border p-0">
                <p>
                  <a class="btn btn-transaction w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
                    <span class="fw-bold">PayPal</span>
                    <span class="fab fa-cc-paypal"></span>
                  </a>
                </p>
                <div class="collapse p-3 pt-0" id="collapseExample">
                  <div class="row">
                    <div class="col-8">
                      <p class="h4 mb-0">Summary</p>
                      <p class="mb-0">
                        <span class="fw-bold">Product:</span>
                        <span class="c-green">#034{{$order_id}}</span>
                      </p>
                      <p class="mb-0">
                        <span class="fw-bold">Price:</span>
                        <span class="c-green">Rp.{{$total}}</span>
                      </p>
                      <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque nihil neque quisquam aut repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab quis, iste harum ipsum hic, nemo qui!</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body border p-0">
                <p>
                  <a class="btn btn-transaction p-2 w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
                    <span class="fw-bold">Credit Card</span>
                    <span class="">
                      <span class="fab fa-cc-amex"></span>
                      <span class="fab fa-cc-mastercard"></span>
                      <span class="fab fa-cc-discover"></span>
                    </span>
                  </a>
                </p>
                <div class="collapse show p-3 pt-0" id="collapseExample">
                  <div class="row">
                    <div class="col-lg-5 mb-lg-0 mb-3">
                      <p class="h4 mb-0">Summary</p>
                      <p class="mb-0">
                        <span class="fw-bold">Product:</span>
                        <span class="c-green">#034{{$order_id}}</span>
                      </p>
                      <p class="mb-0">
                        <span class="fw-bold">Price:</span>
                        <span class="c-green">Rp.{{$total}}</span>
                      </p>
                      <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque nihil neque quisquam aut repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab quis, iste harum ipsum hic, nemo qui!</p>
                    </div>
                    <div class="col-lg-7">
                      <form action="" class="form">
                        <div class="row">
                          <div class="col-12">
                            <div class="form__div">
                              <input type="text" class="form-control" placeholder=" ">
                              <label for="" class="form__label">Card Number</label>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form__div">
                              <input type="text" class="form-control" placeholder=" ">
                              <label for="" class="form__label">MM / yy</label>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form__div">
                              <input type="password" class="form-control" placeholder=" ">
                              <label for="" class="form__label">cvv code</label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form__div">
                              <input type="text" class="form-control" placeholder=" ">
                              <label for="" class="form__label">name on the card</label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="btn btn-transaction w-100">Submit</div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- <div class="col-12">
            <div class="btn btn-primary payment"> Make Payment </div>
          </div> --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger" style="background-color: #D75053">Make Payment</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Cancel -->
  <div class="modal fade" id="cancel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Cancel Order</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          You're about to cancel your order and go back to the Reservation menu.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, back to transaction</button>
          <button onclick="window.location='{{ url("order") }}'"type="button" class="btn btn-danger" style="background-color: #D75053">Yes, i want to cancel the order</button>
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