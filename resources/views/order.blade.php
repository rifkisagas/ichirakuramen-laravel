<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body class="img-fluid order-bg">
  <header>
  @include('layouts.navbar')
  {{-- <img src="images/ramen-waiter.jpg" class="img-fluid" alt="Responsive image" style="opacity: 0.5;"> --}}
  </header>
  <div class="order-lists" style="z-index: 25">
    <div class="container">
      <div class="row">
        <div class="col-md-6" data-tag="ramen" data-aos="fade-down" data-aos-delay="1000">
          <a href="#" data-toggle="modal" data-target="#dine"> <div class="card hover hover-2 remover">
            <img src="images/dine-in.jpg" class="card-img-top" alt="..." style="opacity: 0.8">
            <div class="hover-overlay"></div>
            <div class="hover-2-content">
              <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light"></span>Dine-in</h3>
              <p class="hover-2-description font-weight-light mb-0">Made with Pork-bone soup skimmed to perfection</p>
            </div>
          </div></a>
        </div>
        <div class="col-md-6" data-tag="ramen" data-aos="fade-up" data-aos-delay="1000">
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
    <div class="modal-dialog modal-dialog-centered modal-fullscreen" role="document">
      <div class="modal-content" style="background: #FEEFEF ">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Dine-in</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <div class="row">
                <div class="col">
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
                  </div>
                </div>
              </div>
              <div style="margin-top:20px"></div>
              <div class="row">
                <h5>Menu Selection</h5>
                <div class="col">
                  <div class='input-group'>
                    <div class="input-group mb-3">
                      <select class="form-select d-sm-inline-flex p-2" aria-label="Default select example" id="ramen-input">
                        <option hidden>(Select Ramen Option)</option>
                        <option value="1">Tonkotsu Ramen</option>
                        <option value="2">Kamadare Ramen</option>
                        <option value="3">Gokaku Ramen</option>
                      </select>
                      <input type="number" step="1" max="10" min="0" value="1" name="quantity" style="margin-left: 24px" class="quantity-field border-0 text-center w-25 d-sm-inline-flex justify-content-end">
                    </div>
                    <div class="input-group mb-3">
                      <select class="form-select d-sm-inline-flex p-2" aria-label="Default select example" id="optionaldish-input">
                        <option hidden>(Select Optional Dish)</option>
                        <option value="1">Spicy Tuna Roll</option>
                        <option value="2">Tempura Sushi</option>
                        <option value="3">Chu-Toro</option>
                      </select>
                      <input id="qty" type="number" step="1" max="10" min="0" value="1" name="quantity" style="margin-left: 24px" class="quantity-field border-0 text-center w-25 d-sm-inline-flex justify-content-end">
                    </div>
                    <div class="input-group mb-3">
                      <select class="form-select d-sm-inline-flex p-2" aria-label="Default select example" id="drink-input">
                        <option hidden>(Select Drink)</option>
                        <option value="1">Ocha</option>
                      </select>
                      <input type="number" step="1" max="10" min="0" value="1" name="quantity" style="margin-left: 24px" class="quantity-field border-0 text-center w-25 d-sm-inline-flex justify-content-end">
                    </div>
                  </div>
                </div>
                {{-- <div class="col">
                  <button data-toggle="modal" data-target="#timemodal" class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa-regular fa-clock"></i></button>
                  <span type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10"></span>
                  <button data-toggle="modal" data-target="#timemodal" class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa-regular fa-clock"></i></button>
                  <button data-toggle="modal" data-target="#timemodal" class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa-regular fa-clock"></i></button>
                  <span type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10"></span>
                  <button data-toggle="modal" data-target="#timemodal" class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa-regular fa-clock"></i></button>
                  <button data-toggle="modal" data-target="#timemodal" class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa-regular fa-clock"></i></button>
                  <span type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10"></span>
                  <button data-toggle="modal" data-target="#timemodal" class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa-regular fa-clock"></i></button>
                </div> --}}
              </div>
            </div>
            <div class="col">
              <div class="container">
                {{-- <div class="d-flex justify-content-center">Test</div> --}}
                <div class="menu-filters-order d-flex-row">
                  <button class="btn btn-small btn-menu-order hvr-grow p-2" data-toggle="portfilter" data-target="all" style="z-index: 999">
                    All
                  </button>
                  <button class="btn btn-small btn-menu-order hvr-grow p-2" data-toggle="portfilter" data-target="ramen">
                    Ramen
                  </button>
                  <button class="btn btn-small btn-menu-order hvr-grow p-2" data-toggle="portfilter" data-target="sushi">
                    Sushi
                  </button>
                  <button class="btn btn-small btn-menu-order hvr-grow p-2" data-toggle="portfilter" data-target="drink">
                    Drink
                  </button>
                </div>
                <div class="row">
                  <div class="col-md-5" style="margin-bottom:20px" data-tag="ramen">
                    <div class="card hover hover-2 remover menu-choose-ramen" value="1" type="button">
                      <img src="images/tonkotsuramen.png" class="card-img-top" alt="...">
                      <div class="hover-overlay"></div>
                      <div class="hover-2-content">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light"></span>Tonkotsu</h3>
                        <p class="hover-2-description font-weight-light mb-0">Made with Pork-bone soup skimmed to perfection</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5" style="margin-bottom:20px" data-tag="ramen">
                    <div class="card hover hover-2 remover menu-choose-ramen" value="2" type="button">
                      <img src="images/kamadareramen.png" class="card-img-top" alt="...">
                      <div class="hover-overlay"></div>
                      <div class="hover-2-content">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Kamadare </span></h3>
                        <p class="hover-2-description font-weight-light mb-0">Served with The special "umami" inside the secret broth</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5" style="margin-bottom:20px" data-tag="ramen">
                    <div class="card hover hover-2 remover menu-choose-ramen" value="3" type="button">
                      <img src="images/gokakuramen.png" class="card-img-top" alt="...">
                      <div class="hover-overlay"></div>
                      <div class="hover-2-content">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Gokaku </span></h3>
                        <p class="hover-2-description font-weight-light mb-0">"Gokaku" is Japanese for "passing an exam"</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5" style="margin-bottom:20px" data-tag="sushi" >
                    <div class="card hover hover-2 remover menu-choose-optionaldish" value="1" type="button">
                      <img src="images/spicytuna.jpg" class="card-img-top" alt="...">
                      <div class="hover-overlay"></div>
                      <div class="hover-2-content">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">spicy </span> tuna roll</h3>
                        <p class="hover-2-description font-weight-light mb-0">Raw tuna with Ichimi togarashi</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5" style="margin-bottom:20px" data-tag="sushi" >
                    <div class="card hover hover-2 remover menu-choose-optionaldish" value="2" type="button">
                      <img src="images/shrimptempura.jpg" class="card-img-top" alt="...">
                      <div class="hover-overlay"></div>
                      <div class="hover-2-content">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Tempura </span> Sushi</h3>
                        <p class="hover-2-description font-weight-light mb-0">Lightly battered and crispy coating</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5" style="margin-bottom:20px" data-tag="sushi" >
                    <div class="card hover hover-2 remover menu-choose-optionaldish" value="3" type="button">
                      <img src="images/chutoro.jpg" class="card-img-top" alt="...">
                      <div class="hover-overlay"></div>
                      <div class="hover-2-content">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Chu-toro</span></h3>
                        <p class="hover-2-description font-weight-light mb-0">flavor of akami with sweet tenderness of an o-toro</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5" style="margin-bottom:20px" data-tag="drink" >
                     <div class="card hover hover-2 remover menu-choose-drink" value="1" type="button">
                      <img src="images/ocha.jpg" class="card-img-top" alt="...">
                      <div class="hover-overlay"></div>
                      <div class="hover-2-content">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Ocha </span></h3>
                        <p class="hover-2-description font-weight-light mb-0">Made with the bancha tea leaves from kyoto</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{-- <a href="order"><button type="button" class="btn btn-primary" style="background-color: #D75053">Order</button></a> --}}
          <button type="button" class="btn btn-primary" style="background-color: #D75053" data-toggle="modal" data-target="#test">Order</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal menu --}}
  <div class="modal fade" id="test" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content" style="background: #FEEFEF ">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">INI MENU</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            {{-- <span class="input-group-text" id="basic-addon1">@</span> --}}
            <input type="text" class="form-control" placeholder="pil1" aria-label="First Name" aria-describedby="basic-addon1">
            <span class="input-group-text">+</span>
          </div>
          <div class="input-group mb-3">
            {{-- <span class="input-group-text" id="basic-addon1">@</span> --}}
            <input type="text" class="form-control" placeholder="pil2" aria-label="First Name" aria-describedby="basic-addon1">
            <span class="input-group-text">+</span>
          </div>
          <div class="input-group mb-3">
            {{-- <span class="input-group-text" id="basic-addon1">@</span> --}}
            <input type="text" class="form-control" placeholder="pil3" aria-label="First Name" aria-describedby="basic-addon1">
            <span class="input-group-text">+</span>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{-- <a href="order"><button type="button" class="btn btn-primary" style="background-color: #D75053">Order</button></a> --}}
          <button type="button" class="btn btn-primary" style="background-color: #D75053" data-toggle="modal" data-target="#test">Order</button>
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

// $(".menu-choose-ramen").click(function(){
//     console.log($(this).val());
//     $("menu-input").val($(this).val());
// });

$(".menu-choose-ramen").click(function () {
    $('#ramen-input').val($(this).attr('value'))
});

$(".menu-choose-drink").click(function () {
    $('#drink-input').val($(this).attr('value'))
});

$(".menu-choose-optionaldish").click(function () {
    $('#optionaldish-input').val($(this).attr('value'))
});

function incrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal)) {
      // currentVal = currentVal-1;
      parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
      console.log(currentVal);
  } else {
      parent.find('input[name=' + fieldName + ']').val(0);
  }
}

function decrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal) && currentVal > 0) {
      parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
      console.log(currentVal);
  } else {
      parent.find('input[name=' + fieldName + ']').val(0);
  }
}

$('#qty').on('click', '.button-plus', function(e) {
    incrementValue(e);
});

$('#qty').on('click', '.button-minus', function(e) {
    decrementValue(e);
});

</script>

</html>