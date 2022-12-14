<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
  <header>
    <div class="wrapper" id="wrapper">
      <nav data-aos="fade-down" data-aos-delay="300" data-aos-duration="1150">
        {{-- <div class="menu"> --}}
          <div class="logo" id="logo">
              <img src="images/ichirakuramen.png">    
          </div>
          <ul>
              <li><a href="home" class="hvr-grow">Home</a></li>
              {{-- <li><a href="#lists" class="hvr-grow">Join our List</a></li>
              <li><a href="#reservations" class="hvr-grow">Reservations</a></li> --}}
              <li><a href="gallery" class="hvr-grow">Gallery</a></li>
              <li><a href="order" class="hvr-grow">Reservation</a></li> 
              <li><a href="contact" class="hvr-grow">Contact</a></li>
              <li><a href="menu" class="hvr-grow">Menu</a></li>
          </ul>
        {{-- </div> --}}
      </nav>
    </div>
    <div id="wrapper-bg" class="wrapper-bg">
      <div id="home">
        <h1 class="big-title translate" data-aos="fade-down" data-aos-delay="1000" data-aos-duration="1500" >I c h i r a k u</h1>
        {{-- <h1 class="big-title translate" data-aos="fade-down" ><img src="/images/ichirakuramen."></h1> --}}
        <h3 class="big-title-comment translate" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="2000">・The Finest Ramen from The Hidden Leaf Village・</h3>
      </div>
    </div>
  </header>
  <div id="reservations">
    <div class="container-xxl">
      <div class="card text-bg-dark" data-aos="fade-up">
        <img src="images/ramen-bowl.jpg" class="card-img" style="opacity: 0.7">
        <div class="card-img-overlay">
          <div class="row g-0">
            <div class="card-body">
              <div class="col-md-5" style="float:right;">
                <div class="white-box box-pad" style="margin-top:40%;height:50%;" data-aos="fade-left">
                  <div class="res-content" style="font-family: westmount-light;">
                    <h5 class="card-title" style="margin-bottom:20px;font-size: 28px">Served from the bottom of heart</h5>
                    <p class="card-text" style="font-size: 16px">Ichiraku, is a japanese restaurant and sushi bar offering a modern interpretation of Japanese cuisine. Featuring innovative and original creations, Ichiraku takes a bold and distinct approach in its menu, incorporating fresh and seasonal produce and ingrediens from the Hidden Leaf Village.</p>
                  </div>
                </div>
              </div>
            </div>
          {{-- <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small>Last updated 3 mins ago</small></p> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="events">
    <div class="container-xxl">
      <div class="white-box" data-aos="fade-down">
        <div class="box-pad">
          <div class="card-fluid" style="max-width: auto;">
            <div class="row g-0">
              <div class="col-md-5" style="">
                <div class="card-body">
                  <h5 class="card-title" style="font-family: westmount-light; margin-bottom:20px; font-size: 34px">Teuchi's Classic Ramen Shop</h5>
                  <div class="card-text" style="font-family: westmount-light;">
                    <p style="font-size: 16px">With classic design and originated look from konohagakure's ichiraku ramen shop, Ichiraku provides great service with a warm atmosphere from the Hidden Leaf Village. Ichiraku's name was given because it means <b style="font-family: westmount-regular">"Ramen is the Best Pleasure"</b>.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6" style="margin-left: 80px;" data-aos="zoom-up">
                <img src="images/ramen-shop.jpg" class="img-fluid rounded-start" alt="...">
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
  $('#wrapper-bg').fadeOut();
  $('#wrapper-bg').fadeIn();
  $('#logo').fadeOut();
  AOS.init();

  $(window).on("scroll", function() {
    if($(window).scrollTop()) {
      $('nav').addClass('black').fadeIn();
      $('nav ul li a').css({"color":"#D75053"});
      // $("nav ul li a").css("color", "#D75053");
      $('#logo').fadeIn();
    }
    else{
      $('nav').removeClass('black').fadeIn();
      // $("nav ul li a").css("color", "#000");
      $('#logo').fadeOut();
      $('nav ul li a').css({"color":"#AFAFAF"});
    }
  });
  
  //   if($(window).scrollTop() > 400 && $(this).scrollTop() < 800) {
      
  //   } else {
      
  //   }
  // });
</script>
</html>