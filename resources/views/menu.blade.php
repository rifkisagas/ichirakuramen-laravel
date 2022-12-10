<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
  <header>
  @include('layouts.navbar')
  <img src="images/menu-bg.jpg" class="img-fluid" alt="Responsive image" style="opacity: 0.5;">
  </header>
  <div class="container-fluid">
      <div class="menu-title">
        <h2>Ichiraku's exquisite delicacy</h2>
      </div>

      <div class="menu-filters">
        <button class="btn btn-small btn-menu hvr-grow" data-toggle="portfilter" data-target="all" style="z-index: 999">
          All
        </button>
        <button class="btn btn-small btn-menu hvr-grow" data-toggle="portfilter" data-target="ramen">
          Ramen
        </button>
        <button class="btn btn-small btn-menu hvr-grow" data-toggle="portfilter" data-target="sushi">
          Sushi
        </button>
        <button class="btn btn-small btn-menu hvr-grow" data-toggle="portfilter" data-target="drink">
          Drink
        </button>
      </div>
      <div class="menu-lists">
        <div class="clearfix"></div>
        <div style="margin-bottom: 20px"></div>
        <br>

        <div class="container">
          <div class="row">
            <div class="col-md-4" data-tag="ramen">
              <a href="#" data-toggle="modal" data-target="#tonkotsu"> <div class="card hover hover-2 remover">
                <img src="images/tonkotsuramen.png" class="card-img-top" alt="...">
                <div class="hover-overlay"></div>
                <div class="hover-2-content">
                  <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light"></span>Tonkotsu</h3>
                  <p class="hover-2-description font-weight-light mb-0">Made with Pork-bone soup skimmed to perfection</p>
                </div>
              </div></a>
            </div>
            <div class="col-md-4" data-tag="ramen">
              <a href="#" data-toggle="modal" data-target="#kamadare"> <div class="card hover hover-2 remover">
                <img src="images/kamadareramen.png" class="card-img-top" alt="...">
                <div class="hover-overlay"></div>
                <div class="hover-2-content">
                  <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Kamadare </span></h3>
                  <p class="hover-2-description font-weight-light mb-0">Served with The special "umami" inside the secret broth</p>
                </div>
              </div></a>
            </div>
            <div class="col-md-4" data-tag="ramen">
              <a href="#" data-toggle="modal" data-target="#gokaku"> <div class="card hover hover-2 remover">
                <img src="images/gokakuramen.png" class="card-img-top" alt="...">
                <div class="hover-overlay"></div>
                <div class="hover-2-content">
                  <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Gokaku </span></h3>
                  <p class="hover-2-description font-weight-light mb-0">"Gokaku" is Japanese for "passing an exam"</p>
                </div>
              </div></a>
            </div>
          </div>
          <div class="row">
            <div style="margin-top: 60px"></div>
            <div class="col-md-3" data-tag="sushi">
              <a href="#" data-toggle="modal" data-target="#spicytuna"> <div class="card hover hover-2 remover">
                <img src="images/spicytuna.jpg" class="card-img-top" alt="...">
                <div class="hover-overlay"></div>
                <div class="hover-2-content">
                  <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">spicy </span> tuna roll</h3>
                  <p class="hover-2-description font-weight-light mb-0">Raw tuna with Ichimi togarashi</p>
                </div>
              </div></a>
            </div>
            <div class="col-md-3" data-tag="sushi">
              <a href="#" data-toggle="modal" data-target="#shrimptempura"> <div class="card hover hover-2 remover">
                <img src="images/shrimptempura.jpg" class="card-img-top" alt="...">
                <div class="hover-overlay"></div>
                <div class="hover-2-content">
                  <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Tempura </span> Sushi</h3>
                  <p class="hover-2-description font-weight-light mb-0">Lightly battered and crispy coating</p>
                </div>
              </div></a>
            </div>
            <div class="col-md-3" data-tag="sushi">
              <a href="#" data-toggle="modal" data-target="#chutoro"> <div class="card hover hover-2 remover">
                <img src="images/chutoro.jpg" class="card-img-top" alt="...">
                <div class="hover-overlay"></div>
                <div class="hover-2-content">
                  <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Chu-toro</span></h3>
                  <p class="hover-2-description font-weight-light mb-0">flavor of akami with sweet tenderness of an o-toro</p>
                </div>
              </div></a>
            </div>
            <div class="col-md-3" data-tag="drink">
              <a href="#" data-toggle="modal" data-target="#ocha"> <div class="card hover hover-2 remover">
                <img src="images/ocha.jpg" class="card-img-top" alt="...">
                <div class="hover-overlay"></div>
                <div class="hover-2-content">
                  <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Ocha </span></h3>
                  <p class="hover-2-description font-weight-light mb-0">Made with the bancha tea leaves from kyoto</p>
                </div>
              </div></a>
            </div>
          </div>
       </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="tonkotsu" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background: #FEEFEF ">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Tonkotsu Ramen</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" style="background-color: #D75053">Order</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="kamadare" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background: #FEEFEF ">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Kamadare Ramen</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" style="background-color: #D75053">Order</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="gokaku" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background: #FEEFEF ">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Gokaku Ramen</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" style="background-color: #D75053">Order</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="spicytuna" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background: #FEEFEF ">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Spicy Tuna Roll</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" style="background-color: #D75053">Order</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="shrimptempura" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background: #FEEFEF ">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Tempura Sushi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" style="background-color: #D75053">Order</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="chutoro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background: #FEEFEF ">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Chu-toro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" style="background-color: #D75053">Order</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="ocha" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background: #FEEFEF ">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Ocha</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" style="background-color: #D75053">Order</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@include('layouts.foot')
@include('layouts.script')
<script>
AOS.init();
function show() {
 
 /* Access image by id and change
 the display property to block*/
 document.getElementById('image')
         .style.display = "block";

 document.getElementById('btnID')
         .style.display = "none";
}
</script>
</html>