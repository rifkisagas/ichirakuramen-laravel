<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body class="img-fluid order-bg">
  <header>
  @include('layouts.navbar')
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
              <p class="hover-2-description font-weight-light mb-0">Book your seat and feel the nice and peacefull Ichiraku's Atmosphere</p>
            </div>
          </div></a>
        </div>
        <div class="col-md-6" data-tag="ramen" data-aos="fade-up" data-aos-delay="1000">
          <a href="#" data-toggle="modal" data-target="#delivery"> <div class="card hover hover-2 remover">
            <img src="images/delivery.jpg" class="card-img-top" alt="..." style="opacity: 0.8">
            <div class="hover-overlay"></div>
            <div class="hover-2-content">
              <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Room-delivery</span></h3>
              <p class="hover-2-description font-weight-light mb-0">Enjoy the ramen by yourself with the same Ichiraku's Atmosphere</p>
            </div>
          </div></a>
        </div>
      </div>
    </div>
  </div>

  {{-- Modal dine--}}

  <div class="modal fade" id="dine" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen" role="document">
      <div class="modal-content" style="background: #FEEFEF ">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Dine-in</h5>
          <button type="button" id="modalclose" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="form-order" name="myForm" action="{{url('api/reservation_dine')}}" class="needs-validation" method="POST" novalidate>
            {{ csrf_field() }}
          <div class="row">
            <div class="col-md-5">
              <div class="row">
                <div class="col">
                  <div class='input-group'>
                    <label for="basic-url" class="form-label">Your Information</label>
                    <div class="input-group mb-3">
                      <input type="text" id="firstname" name="firstname" class="form-control checker" placeholder="First Name" aria-label="First Name" aria-describedby="basic-addon1" required>
                      <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name" aria-label="Last Name" aria-describedby="basic-addon1" required>
                      <div class="invalid-feedback">Valid name required for valid orders.</div>
                    </div>
                    
                    <div class="input-group mb-3">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email Address (user@mail.com)" aria-label="Email Address" aria-describedby="basic-addon2" required>
                      <div class="invalid-feedback">Valid email address required for valid orders.</div>
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon2">+62</span>
                      <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number (81234567891)" aria-label="Phone Number" aria-describedby="basic-addon2" required>
                      <div class="invalid-feedback">Valid phone number required for valid orders.</div>
                    </div>
                    
                    <label for="basic-url" class="form-label">Summary</label>
                    <div class="input-group mb-3">
                      <div class="form-control">
                        <input type="text" placeholder="Date Reservation (YYYY/MM/DD)" id="datereservation" name="datereservation" class="date" aria-describedby="basic-addon" required>
                      </div>
                      <div class="invalid-feedback">Please input the specific date.</div>
                    </div>
                    <div id="error-date"></div>
                    <div class="input-group mb-3">
                      <button data-toggle="modal" data-target="#timemodal" class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa-regular fa-clock"></i></button>
                      <input type="text" placeholder="Time Reservation" class="form-control" id="timerange" name="timerange" aria-label="Disabled input example" aria-describedby="basic-addon" required>
                      <div class="invalid-feedback">Please choose the time reservation.</div>
                    </div>
                    
                    <div class="input-group">
                      <span class="input-group-text">Reservation Notes</span>
                      <textarea class="form-control" id="reservationnotes" name="reservationnotes" aria-label="With textarea"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div style="margin-top:20px"></div>
              <div class="row">
                <h5>Menu Selection</h5>
                <div class="col">
                  <button type="button" class="btn btn-danger" style="background-color: #D75053" id="btn-create">Add Order</button>
                  <button type="button" class="btn btn-danger" style="background-color: #D75053" id="btn-reset">Reset</button>
                  <div style="margin-bottom: 12px"></div>
                  <div class='input-group' id="adddropdown">
                    {{-- add order reset order --}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="container">
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
                  <div class="col-md-4" style="margin-bottom:20px" data-tag="ramen">
                    <div class="card hover hover-2 remover menu-choose" value="1" type="button">
                      <img src="images/tonkotsuramen.png" class="card-img-top" alt="...">
                      <div class="hover-overlay"></div>
                      <div class="hover-2-content">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light"></span>Tonkotsu</h3>
                        <p class="hover-2-description font-weight-light mb-0">Made with Pork-bone soup skimmed to perfection</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4" style="margin-bottom:20px" data-tag="ramen">
                    <div class="card hover hover-2 remover menu-choose" value="2" type="button">
                      <img src="images/kamadareramen.png" class="card-img-top" alt="...">
                      <div class="hover-overlay"></div>
                      <div class="hover-2-content">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Kamadare </span></h3>
                        <p class="hover-2-description font-weight-light mb-0">Served with The special "umami" inside the secret broth</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4" style="margin-bottom:20px" data-tag="ramen">
                    <div class="card hover hover-2 remover menu-choose" value="3" type="button">
                      <img src="images/gokakuramen.png" class="card-img-top" alt="...">
                      <div class="hover-overlay"></div>
                      <div class="hover-2-content">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Gokaku </span></h3>
                        <p class="hover-2-description font-weight-light mb-0">"Gokaku" is Japanese for "passing an exam"</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4" style="margin-bottom:20px" data-tag="sushi" >
                    <div class="card hover hover-2 remover menu-choose" value="4" type="button">
                      <img src="images/spicytuna.jpg" class="card-img-top" alt="...">
                      <div class="hover-overlay"></div>
                      <div class="hover-2-content">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">spicy </span> tuna roll</h3>
                        <p class="hover-2-description font-weight-light mb-0">Raw tuna with Ichimi togarashi</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4" style="margin-bottom:20px" data-tag="sushi" >
                    <div class="card hover hover-2 remover menu-choose" value="5" type="button">
                      <img src="images/shrimptempura.jpg" class="card-img-top" alt="...">
                      <div class="hover-overlay"></div>
                      <div class="hover-2-content">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Tempura </span> Sushi</h3>
                        <p class="hover-2-description font-weight-light mb-0">Lightly battered and crispy coating</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4" style="margin-bottom:20px" data-tag="sushi" >
                    <div class="card hover hover-2 remover menu-choose" value="6" type="button">
                      <img src="images/chutoro.jpg" class="card-img-top" alt="...">
                      <div class="hover-overlay"></div>
                      <div class="hover-2-content">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Chu-toro</span></h3>
                        <p class="hover-2-description font-weight-light mb-0">The significant flavor of akami with sweet tenderness of an o-toro</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4" style="margin-bottom:20px" data-tag="drink" >
                     <div class="card hover hover-2 remover menu-choose" value="7" type="button">
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
          <input type="hidden" placeholder="Time Reservation" class="form-control" id="uniqId" name="uniqId" aria-label="Disabled input example" aria-describedby="basic-addon"/>            
          <button type="submit" id="btn-submit" class="btn btn-danger" style="background-color: #D75053">Order</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  {{-- Modal room--}}

  <div class="modal fade" id="delivery" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen" role="document">
      <div class="modal-content" style="background: #FEEFEF ">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Room-delivery</h5>
          <button type="button" id="modalclose-delivery" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form name="myForm" action="{{url('api/reservation_delivery')}}" class="needs-validation" method="POST" novalidate>
            {{ csrf_field() }}
          <div class="row">
            <div class="col-md-5">
              <div class="row">
                <div class="col">
                  <div class='input-group'>
                    <label for="basic-url" class="form-label">Your Information</label>
                    <div class="input-group mb-3">
                      <input type="text" id="firstname" name="firstname" class="form-control checker" placeholder="First Name" aria-label="First Name" aria-describedby="basic-addon1" required>
                      <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name" aria-label="Last Name" aria-describedby="basic-addon1" required>
                      <div class="invalid-feedback">Valid name required for valid orders.</div>
                    </div>
                    
                    <div class="input-group mb-3">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email Address (user@mail.com)" aria-label="Email Address" aria-describedby="basic-addon2" required>
                      <div class="invalid-feedback">Valid email address required for valid orders.</div>
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon2">+62</span>
                      <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number (81234567891)" aria-label="Phone Number" aria-describedby="basic-addon2" required>
                      <div class="invalid-feedback">Valid phone number required for valid orders.</div>
                    </div>
                    
                    <label for="basic-url" class="form-label">Summary</label>
                    <div class="input-group mb-3">
                      <button data-toggle="modal" data-target="#roomnumbermodal" class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa-regular fa-clock"></i></button>
                      <input type="text" placeholder="Room Number (01)" class="form-control" id="roomnumber" name="roomnumber" aria-label="Disabled input example" aria-describedby="basic-addon" required>
                      <div class="invalid-feedback">Please choose the room number.</div>
                    </div>
                    <div class="input-group">
                      <span class="input-group-text">Reservation Notes</span>
                      <textarea class="form-control" id="reservationnotes" name="reservationnotes" aria-label="With textarea"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div style="margin-top:20px"></div>
              <div class="row">
                <h5>Menu Selection</h5>
                <div class="col">
                  <button type="button" class="btn btn-danger" style="background-color: #D75053" id="btn-create-delivery">Add Order</button>
                  <button type="button" class="btn btn-danger" style="background-color: #D75053" id="btn-reset-delivery">Reset</button>
                  <div style="margin-bottom: 12px"></div>
                  <div class='input-group-delivery' id="adddropdown-delivery">
                    {{-- add order reset order --}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="container">
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
                  <div class="col-md-4" style="margin-bottom:20px" data-tag="ramen">
                    <div class="card hover hover-2 remover menu-choose-delivery" value="1" type="button">
                      <img src="images/tonkotsuramen.png" class="card-img-top" alt="...">
                      <div class="hover-overlay"></div>
                      <div class="hover-2-content">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light"></span>Tonkotsu</h3>
                        <p class="hover-2-description font-weight-light mb-0">Made with Pork-bone soup skimmed to perfection</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4" style="margin-bottom:20px" data-tag="ramen">
                    <div class="card hover hover-2 remover menu-choose-delivery" value="2" type="button">
                      <img src="images/kamadareramen.png" class="card-img-top" alt="...">
                      <div class="hover-overlay"></div>
                      <div class="hover-2-content">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Kamadare </span></h3>
                        <p class="hover-2-description font-weight-light mb-0">Served with The special "umami" inside the secret broth</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4" style="margin-bottom:20px" data-tag="ramen">
                    <div class="card hover hover-2 remover menu-choose-delivery" value="3" type="button">
                      <img src="images/gokakuramen.png" class="card-img-top" alt="...">
                      <div class="hover-overlay"></div>
                      <div class="hover-2-content">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Gokaku </span></h3>
                        <p class="hover-2-description font-weight-light mb-0">"Gokaku" is Japanese for "passing an exam"</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4" style="margin-bottom:20px" data-tag="sushi" >
                    <div class="card hover hover-2 remover menu-choose-delivery" value="4" type="button">
                      <img src="images/spicytuna.jpg" class="card-img-top" alt="...">
                      <div class="hover-overlay"></div>
                      <div class="hover-2-content">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">spicy </span> tuna roll</h3>
                        <p class="hover-2-description font-weight-light mb-0">Raw tuna with Ichimi togarashi</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4" style="margin-bottom:20px" data-tag="sushi" >
                    <div class="card hover hover-2 remover menu-choose-delivery" value="5" type="button">
                      <img src="images/shrimptempura.jpg" class="card-img-top" alt="...">
                      <div class="hover-overlay"></div>
                      <div class="hover-2-content">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Tempura </span> Sushi</h3>
                        <p class="hover-2-description font-weight-light mb-0">Lightly battered and crispy coating</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4" style="margin-bottom:20px" data-tag="sushi" >
                    <div class="card hover hover-2 remover menu-choose-delivery" value="6" type="button">
                      <img src="images/chutoro.jpg" class="card-img-top" alt="...">
                      <div class="hover-overlay"></div>
                      <div class="hover-2-content">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Chu-toro</span></h3>
                        <p class="hover-2-description font-weight-light mb-0">The significant flavor of akami with sweet tenderness of an o-toro</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4" style="margin-bottom:20px" data-tag="drink" >
                     <div class="card hover hover-2 remover menu-choose-delivery" value="7" type="button">
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
          <input type="hidden" placeholder="Time Reservation" class="form-control" id="uniqId_delivery" name="uniqId_delivery" aria-label="Disabled input example" aria-describedby="basic-addon"/>            
          <button type="submit" id="btn-submit" class="btn btn-danger" style="background-color: #D75053">Order</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  {{-- modal room number --}}
  <div class="modal fade" id="roomnumbermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content" style="background: #FEEFEF ">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Room Number</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-4 d-grid gap-2 mx-auto">
                <button class="btn btn-secondary btn-room" data-dismiss="modal" value="01" type="button" style="background-color: #D75053">01</button>
              </div>
              <div class="col-4 d-grid gap-2 mx-auto">
                <button type="button" class="btn btn-secondary btn-room" data-dismiss="modal" value="02" style="background-color: #D75053">02</button>
              </div>
              <div class="col-4 d-grid gap-2 mx-auto">
                <button type="button" class="btn btn-secondary btn-room"  data-dismiss="modal" value="03" style="background-color: #D75053; height:2cm">03</button>
              </div>
            </div>
            <div class="row" style="margin-top: 2cm">
              <div class="col-4 d-grid gap-2 mx-auto">
                <button type="button" class="btn btn-secondary btn-room" data-dismiss="modal" value="04" style="background-color: #D75053">04</button>
              </div>
              <div class="col-4 d-grid gap-2 mx-auto">
                <button type="button" class="btn btn-secondary btn-room" data-dismiss="modal" value="05" style="background-color: #D75053">05</button>
              </div>
              <div class="col-4 d-grid gap-2 mx-auto">
                <button type="button" class="btn btn-secondary btn-room" data-dismiss="modal" value="06" style="background-color: #D75053; height:2cm">06</button>
              </div>
            </div>
            <div class="row" style="margin-top: 2cm">
              <div class="col-4 d-grid gap-2 mx-auto">
                <button type="button" class="btn btn-secondary btn-room" data-dismiss="modal" value="07" style="background-color: #D75053">07</button>
              </div>
              <div class="col-4 d-grid gap-2 mx-auto">
                <button type="button" class="btn btn-secondary btn-room" data-dismiss="modal" value="08" style="background-color: #D75053">08</button>
              </div>
              <div class="col-4 d-grid gap-2 mx-auto">
                <button type="button" class="btn btn-secondary btn-room" data-dismiss="modal" value="09" style="background-color: #D75053; height:2cm">09</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- modal time --}}
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
});

$(".btn-time").click(function(){
    console.log($(this).val());
    $("#timerange").val($(this).val());
});

$(".btn-room").click(function(){
    console.log($(this).val());
    $("#roomnumber").val($(this).val());
});

$(".menu-choose").click(function () {
    $('#menu-' +uniqId).val($(this).attr('value'))
});

$(".menu-choose-delivery").click(function () {
    $('#menu-delivery-' +uniqId).val($(this).attr('value'))
});

function incrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal)) {
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

$('#qty_delivery').on('click', '.button-plus', function(e) {
    incrementValue(e);
});

$('#qty_delivery').on('click', '.button-minus', function(e) {
    decrementValue(e);
});

(function() {
  'use strict';
  window.addEventListener('load', function() {
      var forms = document.getElementsByClassName('needs-validation');
      
      var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
              }
              form.classList.add('was-validated');
          }, false);
      });
  }, false);
})();

var uniqId = 0;
if(uniqId==0){
  uniqId++;
  console.log(uniqId);
  $('#uniqId').val(uniqId);
  $('#uniqId_delivery').val(uniqId);
  $('#adddropdown-delivery').append('<div id="parrentmenudelivery-'+ uniqId +'"class="input-group mb-3"> <select class="form-select d-sm-inline-flex p-2" aria-label="Default select example" name="menu_id_delivery'+ uniqId+'" id="menu-delivery-'+ uniqId +'" required><option></option>                        <option value="1">Tonkotsu Ramen</option>                        <option value="2">Kamadare Ramen</option>                        <option value="3">Gokaku Ramen</option>                        <option value="4">Spicy Tuna</option>                        <option value="5">Tempura Sushi</option>                        <option value="6">Chu-toro Sushi</option>                        <option value="7">Ocha</option>                      </select>                      <input id="menuqtydelivery-'+ uniqId + '"type="number" step="1" max="10" min="0" value="1" name="qty_delivery'+uniqId+'" style="margin-left: 24px" class="quantity-field border-0 text-center w-25 d-sm-inline-flex justify-content-end" required>                      <div class="invalid-feedback">Please Select the menu to order.</div></div>');
  $('#adddropdown').append('<div id="parrentmenu-'+ uniqId +'"class="input-group mb-3"> <select class="form-select d-sm-inline-flex p-2" aria-label="Default select example" name="menu_id_'+ uniqId+'" id="menu-'+ uniqId +'" required><option></option>                        <option value="1">Tonkotsu Ramen</option>                        <option value="2">Kamadare Ramen</option>                        <option value="3">Gokaku Ramen</option>                        <option value="4">Spicy Tuna</option>                        <option value="5">Tempura Sushi</option>                        <option value="6">Chu-toro Sushi</option>                        <option value="7">Ocha</option>                      </select>                      <input id="menuqty-'+ uniqId + '"type="number" step="1" max="10" min="0" value="1" name="qty_'+uniqId+'" style="margin-left: 24px" class="quantity-field border-0 text-center w-25 d-sm-inline-flex justify-content-end" required>                      <div class="invalid-feedback">Please Select the menu to order.</div></div>');
}

$('#modalclose').click(function(){
  while(uniqId!=1){
    if(uniqId > 1){
      $('#menu-'+uniqId).remove();
      $('#menuqty-'+uniqId).remove();
      $('#parrentmenu-'+uniqId).remove();
      uniqId--;
    }
    console.log(uniqId);
  }
});

$('#btn-create').click(function(){
  uniqId++;
  console.log(uniqId);
  
  $('#uniqId').val(uniqId);
  $('#adddropdown').append('<div id="parrentmenu-'+ uniqId +'"class="input-group mb-3"> <select class="form-select d-sm-inline-flex p-2" aria-label="Default select example" name="menu_id_'+ uniqId+'" id="menu-'+ uniqId +'" required><option></option>                        <option value="1">Tonkotsu Ramen</option>                        <option value="2">Kamadare Ramen</option>                        <option value="3">Gokaku Ramen</option>                        <option value="4">Spicy Tuna</option>                        <option value="5">Tempura Sushi</option>                        <option value="6">Chu-toro Sushi</option>                        <option value="7">Ocha</option>                      </select>                      <input id="menuqty-'+ uniqId + '"type="number" step="1" max="10" min="0" value="1" name="qty_'+uniqId+'" style="margin-left: 24px" class="quantity-field border-0 text-center w-25 d-sm-inline-flex justify-content-end" required>                      <div class="invalid-feedback">Please Select the menu to order.</div></div>');
});

$('#btn-reset').click(function(){
  while(uniqId!=1){
    if(uniqId > 1){
      $('#menu-'+uniqId).remove();
      $('#menuqty-'+uniqId).remove();
      $('#parrentmenu-'+uniqId).remove();
      uniqId--;
    }
    console.log(uniqId);
  }
});

$('#modalclose-delivery').click(function(){
  while(uniqId!=1){
    if(uniqId > 1){
      $('#menudelivery-'+uniqId).remove();
      $('#menuqtydelivery-'+uniqId).remove();
      $('#parrentmenudelivery-'+uniqId).remove();
      uniqId--;
    }
    console.log(uniqId);
  }
});

$('#btn-create-delivery').click(function(){
  uniqId++;
  console.log(uniqId);
  
  $('#uniqId_delivery').val(uniqId);
  $('#adddropdown-delivery').append('<div id="parrentmenudelivery-'+ uniqId +'"class="input-group mb-3"> <select class="form-select d-sm-inline-flex p-2" aria-label="Default select example" name="menu_id_delivery'+ uniqId+'" id="menu-delivery-'+ uniqId +'" required><option></option>                        <option value="1">Tonkotsu Ramen</option>                        <option value="2">Kamadare Ramen</option>                        <option value="3">Gokaku Ramen</option>                        <option value="4">Spicy Tuna</option>                        <option value="5">Tempura Sushi</option>                        <option value="6">Chu-toro Sushi</option>                        <option value="7">Ocha</option>                      </select>                      <input id="menuqtydelivery-'+ uniqId + '"type="number" step="1" max="10" min="0" value="1" name="qty_delivery'+uniqId+'" style="margin-left: 24px" class="quantity-field border-0 text-center w-25 d-sm-inline-flex justify-content-end" required>                      <div class="invalid-feedback">Please Select the menu to order.</div></div>');
});

$('#btn-reset-delivery').click(function(){
  while(uniqId!=1){
    if(uniqId > 1){
      $('#menudelivery-'+uniqId).remove();
      $('#menuqtydelivery-'+uniqId).remove();
      $('#parrentmenudelivery-'+uniqId).remove();
      uniqId--;
    }
    console.log(uniqId);
  }
});

// $('#btn-submit').click(function(){
//   var x = document.getElementById("firstname").value;
//   if('.datereservation' != Date()){
//     var cek = document.getElementById('qty_'+uniqId)
//     var inputs = document.getElementsByTagName('input');
//     for (var i = 0; i < inputs.length; i++) {
//     if(inputs[i].hasAttribute("required")){
//         if(inputs[i].value != ""){
//           if(!inputs[i].hasAttribute("accesskey")){
//             // found an empty field that is required
//             alert('Please input the specific date.');
//             document.getElementById("datereservation").focus();
//             break;
//           }
//         }
//       }
//     }
//   }
// })

// $("#form-order").on('submit', function(e) {
//     e.preventDefault();
//     localStorage.setItem('status', 1);
// });

</script>

</html>