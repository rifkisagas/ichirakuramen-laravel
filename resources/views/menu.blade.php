<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
  @include('layouts.navbar')
  <img src="images/menu-bg.jpg" class="img-fluid" alt="Responsive image" style="opacity: 0.5;">
  <div class="container-fluid">
      <div class="menu-title">
        <h2>Ichiraku's exquisite delicacy <span></span></h2>
      </div>

      <div class="menu-lists">
        <button class="btn btn-small btn-menu hvr-grow" data-toggle="portfilter" data-target="all">
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
        <div class="clearfix"></div>
        <div style="margin-bottom: 20px"></div>
        <br>

        <div class="container">
          <div class="row">
            <div class="col-md-4" data-tag="ramen">
              <div class="card hover hover-2">
                <img src="images/tonkotsuramen.png" class="card-img-top" alt="...">
                <div class="hover-overlay"></div>
                <div class="hover-2-content">
                  <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light"></span>Tonkotsu</h3>
                  <p class="hover-2-description font-weight-light mb-0">Made with Pork-bone soup skimmed to perfection</p>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-tag="ramen">
              <div class="card hover hover-2">
                <img src="images/kamadareramen.png" class="card-img-top" alt="...">
                <div class="hover-overlay"></div>
                <div class="hover-2-content">
                  <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Kamadare </span></h3>
                  <p class="hover-2-description font-weight-light mb-0">Served with The special "umami" inside the secret broth</p>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-tag="ramen">
              <div class="card hover hover-2">
                <img src="images/gokakuramen.png" class="card-img-top" alt="...">
                <div class="hover-overlay"></div>
                <div class="hover-2-content">
                  <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Gokaku </span></h3>
                  <p class="hover-2-description font-weight-light mb-0">"Gokaku" is Japanese for "passing an exam"</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div style="margin-top: 60px"></div>
            <div class="col-md-3" data-tag="sushi">
              <div class="card hover hover-2">
                <img src="images/spicytuna.jpg" class="card-img-top" alt="...">
                <div class="hover-overlay"></div>
                <div class="hover-2-content">
                  <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">spicy </span> tuna roll</h3>
                  <p class="hover-2-description font-weight-light mb-0">Raw tuna with Ichimi togarashi</p>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-tag="sushi">
              <div class="card hover hover-2">
                <img src="images/shrimptempura.jpg" class="card-img-top" alt="...">
                <div class="hover-overlay"></div>
                <div class="hover-2-content">
                  <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Tempura </span> Sushi</h3>
                  <p class="hover-2-description font-weight-light mb-0">Lightly battered and crispy coating</p>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-tag="sushi">
              <div class="card hover hover-2">
                <img src="images/chutoro.jpg" class="card-img-top" alt="...">
                <div class="hover-overlay"></div>
                <div class="hover-2-content">
                  <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Chu-toro</span></h3>
                  <p class="hover-2-description font-weight-light mb-0">flavor of akami with sweet tenderness of an o-toro</p>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-tag="drink">
              <div class="card hover hover-2">
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
</body>
@include('layouts.foot')
@include('layouts.script')
<script>
AOS.init();
</script>
</html>