<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
  <header>
  @include('layouts.navbar')
  <img src="images/ramen-waiter.jpg" class="img-fluid" alt="Responsive image" style="opacity: 0.5;">
  </header>
  <div class="order-lists">
    <div class="container">
      <div class="row">
        <div class="col-md-6" data-tag="ramen">
          <a href="#" data-toggle="modal" data-target="#dine"> <div class="card hover hover-2 remover">
            <img src="images/dine-in.jpg" class="card-img-top" alt="..." style="opacity: 0.8">
            <div class="hover-overlay"></div>
            <div class="hover-2-content">
              <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light"></span>Dine-in</h3>
              <p class="hover-2-description font-weight-light mb-0">Made with Pork-bone soup skimmed to perfection</p>
            </div>
          </div></a>
        </div>
        <div class="col-md-6" data-tag="ramen">
          <a href="#" data-toggle="modal" data-target="#delivery"> <div class="card hover hover-2 remover">
            <img src="images/delivery.jpg" class="card-img-top" alt="..." style="opacity: 0.8">
            <div class="hover-overlay"></div>
            <div class="hover-2-content">
              <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Room-delivery</span></h3>
              <p class="hover-2-description font-weight-light mb-0">Served with The special "umami" inside the secret broth</p>
            </div>
          </div></a>
        </div>
      </div>
    </div>
  </div>
  {{-- Modal --}}
  <div class="modal fade" id="dine" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="background: #FEEFEF ">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Dine-in</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <div class='input-group'>
              <label for="basic-url" class="form-label">Your Information</label>
              <div class="input-group mb-3">
                {{-- <span class="input-group-text" id="basic-addon1">@</span> --}}
                <input type="text" class="form-control" placeholder="First Name" aria-label="First Name" aria-describedby="basic-addon1">
                <input type="text" class="form-control" placeholder="Last Name" aria-label="Last Name" aria-describedby="basic-addon1">
              </div>
              
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Email Address" aria-label="Email Address" aria-describedby="basic-addon2">
                {{-- <span class="input-group-text" id="basic-addon2">@example.com</span> --}}
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">+62</span>
                <input type="text" class="form-control" placeholder="Phone Number" aria-label="Phone Number" aria-describedby="basic-addon2">
              </div>
              
              <label for="basic-url" class="form-label">Summary</label>
              <div class="input-group mb-3">
                <div class="form-control">
                  <input type="text" placeholder="Date Reservation" class="date" id="basic-url" aria-describedby="basic-addon">
                </div>
              </div>
              <div class="input-group mb-3">
                <button data-toggle="modal" data-target="#timemodal" class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa-regular fa-clock"></i></button>
                <input type="text" placeholder="Time Reservation" class="form-control" id="timeinput" value="" aria-label="Disabled input example" aria-describedby="basic-addon" disabled>
              </div>
              
              <div class="input-group">
                <span class="input-group-text">Reservation Notes</span>
                <textarea class="form-control" aria-label="With textarea"></textarea>
              </div>
               </span>
            </div>
         </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="order"><button type="button" class="btn btn-primary" style="background-color: #D75053">Order</button></a>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="timemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content" style="background: #FEEFEF ">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Time Available (WIB)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-4 d-grid gap-2 mx-auto">
                <button class="btn btn-secondary btn-time" data-dismiss="modal" value="16:00 - 16:30" type="button" style="background-color: #D75053">16:00 - 16:30</button>
              </div>
              <div class="col-4 d-grid gap-2 mx-auto">
                <button type="button" class="btn btn-secondary btn-time" data-dismiss="modal" value="16:30 - 17:00" style="background-color: #D75053">16:30 - 17:00</button>
              </div>
              <div class="col-4 d-grid gap-2 mx-auto">
                <button type="button" class="btn btn-secondary btn-time"  data-dismiss="modal" value="17:00 - 17:30" style="background-color: #D75053; height:2cm">17:00 - 17:30</button>
              </div>
            </div>
            <div class="row" style="margin-top: 2cm">
              <div class="col-4 d-grid gap-2 mx-auto">
                <button type="button" class="btn btn-secondary btn-time" data-dismiss="modal" value="17:30 - 18:00" style="background-color: #D75053">17:30 - 18:00</button>
              </div>
              <div class="col-4 d-grid gap-2 mx-auto">
                <button type="button" class="btn btn-secondary btn-time" data-dismiss="modal" value="18:30 - 19:00" style="background-color: #D75053">18:30 - 19:00</button>
              </div>
              <div class="col-4 d-grid gap-2 mx-auto">
                <button type="button" class="btn btn-secondary btn-time" data-dismiss="modal" value="19:30 - 20:00" style="background-color: #D75053; height:2cm">19:30 - 20:00</button>
              </div>
            </div>
            <div class="row" style="margin-top: 2cm">
              <div class="col-4 d-grid gap-2 mx-auto">
                <button type="button" class="btn btn-secondary btn-time" data-dismiss="modal" value="20:00 - 20:30" style="background-color: #D75053">20:00 - 20:30</button>
              </div>
              <div class="col-4 d-grid gap-2 mx-auto">
                <button type="button" class="btn btn-secondary btn-time" data-dismiss="modal" value="20:30 - 21:00" style="background-color: #D75053">20:30 - 21:00</button>
              </div>
              <div class="col-4 d-grid gap-2 mx-auto">
                <button type="button" class="btn btn-secondary btn-time" data-dismiss="modal" value="21:00 - 21:30" style="background-color: #D75053; height:2cm">21:00 - 21:30</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{-- <a href="order"><button type="button" class="btn btn-primary" style="background-color: #D75053">Order</button></a> --}}
        </div>
      </div>
    </div>
  </div>
</body>
@include('layouts.foot')
@include('layouts.script')
<script>
AOS.init();
$('.date').datepicker({
  format: "yyyy/mm/dd"
  // todayBtn: "linked"
});

$(".btn-time").click(function(){
    console.log($(this).val());
    $("#timeinput").val($(this).val());
});


</script>

</html>