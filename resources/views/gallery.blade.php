<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body class="img-fluid gallery-bg">
  <header>
  @include('layouts.navbar')
  {{-- <img src="images/ramen-shop.jpg" class="img-fluid" alt="Responsive image" style="opacity: 0.5;"> --}}
  </header>
    <div class="gallery" style="z-index: 25">
      {{-- <div class="clearfix"></div> --}}
      {{-- <div style="margin-bottom: 20px"></div>
      <br> --}}

      <div class="container">
        <div class="row">
          <div class="col-md-4" data-tag="ramen">
            <a href="#" data-toggle="modal" data-target="#tonkotsu"> <div class="card hover hover-2 remover">
              <img src="images/omakase.jpg" class="card-img-top" alt="...">
              <div class="hover-overlay"></div>
              <div class="hover-2-content">
                <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light"></span>Omakase</h3>
              </div>
            </div></a>
          </div>
          <div class="col-md-4" data-tag="ramen">
            <a href="#" data-toggle="modal" data-target="#kamadare"> <div class="card hover hover-2 remover">
              <img src="images/ramencomp.jpg" class="card-img-top" alt="...">
              <div class="hover-overlay"></div>
              <div class="hover-2-content">
                <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Ramen Competition</span></h3>
              </div>
            </div></a>
          </div>
          <div class="col-md-4" data-tag="ramen">
            <a href="#" data-toggle="modal" data-target="#gokaku"> <div class="card hover hover-2 remover">
              <img src="images/ramen-company.jpg" class="card-img-top" alt="...">
              <div class="hover-overlay"></div>
              <div class="hover-2-content">
                <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Ichiraku Company </span></h3>
              </div>
            </div></a>
          </div>
        </div>
        <div class="row">
          <div style="margin-top: 60px"></div>
          <div class="col-md-4" data-tag="sushi">
            <a href="#" data-toggle="modal" data-target="#spicytuna"> <div class="card hover hover-2 remover">
              <img src="images/udatsu.jpg" class="card-img-top" alt="...">
              <div class="hover-overlay"></div>
              <div class="hover-2-content">
                <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Omakase 2</span></h3>
              </div>
            </div></a>
          </div>
          <div class="col-md-4" data-tag="sushi">
            <a href="#" data-toggle="modal" data-target="#shrimptempura"> <div class="card hover hover-2 remover">
              <img src="images/transaction.jpg" class="card-img-top" alt="...">
              <div class="hover-overlay"></div>
              <div class="hover-2-content">
                <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Ichiraku Server </span></h3>
              </div>
            </div></a>
          </div>
          <div class="col-md-4" data-tag="sushi">
            <a href="#" data-toggle="modal" data-target="#chutoro"> <div class="card hover hover-2 remover">
              <img src="images/redragon.jpg" class="card-img-top" alt="...">
              <div class="hover-overlay"></div>
              <div class="hover-2-content">
                <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Red Dragon</span></h3>
              </div>
            </div></a>
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