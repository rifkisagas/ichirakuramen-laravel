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
            <div class='input-group date'>
               <input type='text' value="02-16-2012" class="form-control" id="datepicker" />
               <span class="input-group-addon">
               <span class="glyphicon glyphicon-calendar"></span>
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
</body>
@include('layouts.foot')
@include('layouts.script')
<script>
AOS.init();
$('#datepicker').datepicker({
  format: 'mm-dd-yyyy'
});
</script>
</html>