<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Most Finest Ramen in Konohagakure</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="css/7sm.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">
</head>
<body>
  <header>
    <div class="wrapper" id="wrapper">
      <nav data-aos="fade-down" data-aos-delay="300" data-aos-duration="1150">
        <div class="menu">
          <div class="logo" id="logo">
            <img src="images/ichirakuramen.png">    
          </div>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#lists">Join our List</a></li>
            <li><a href="#reservations">Reservations</a></li>
            <li><a href="#events">Special Events</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#menu">Menu</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <div id="wrapper-bg" class="wrapper-bg">
      <div id="home">
        <h1 class="big-title translate" data-aos="fade-down" data-aos-delay="1000" data-aos-duration="1500" >I c h i r a k u</h1>
        {{-- <h1 class="big-title translate" data-aos="fade-down" ><img src="/images/ichirakuramen."></h1> --}}
        <h3 class="big-title-comment translate" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="2000">・The Most Finest Ramen in Konohagakure・</h3>
      </div>
    </div>
  </header>
  <div id="reservations" data-aos="fade-up">
    <div class="reservations-img">

    </div>
    {{-- <h1>Test</h1> --}}
  </div>
  <div id="about" class="about">
    <div class="about-title" data-aos="fade-up">
      <h1 class="hvr-shrink">The World's Largest Cyber Security </h1>
      <h1>Consultant Company.</h1>
    </div>
    <div class="about-desc" data-aos="fade-up">
      <p>Secure your data and privacy with the most latest cyber security standards.</p>
    </div>
    <div class="about-port" data-aos="fade-down">
      <div id="flowcarousel" class="carousel slide" data-bs-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
          <li data-target="#flowcarousel" data-slide-to="0" class="active"></li>
          <li data-target="#flowcarousel" data-slide-to="1"></li>
          <li data-target="#flowcarousel" data-slide-to="2"></li>
        </ol>
        {{-- <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/images/hq.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>- Monitoring Room -</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/images/hq2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>- Cyber Defence Opperation Headquarter -</h5>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#flowcarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#flowcarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a> --}}
        <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas vero sequi similique officia est provident. Dicta quibusdam nam, odio eius voluptatum optio cumque natus, atque exercitationem accusantium a dolor necessitatibus.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ratione suscipit inventore iste est. Ut dolor dolorum maiores quae quo nostrum deserunt, ab dolorem, molestiae veniam exercitationem ratione aperiam fugit.
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum, distinctio earum ratione magni porro dolor non necessitatibus eaque minima quisquam. Iusto quia dicta ut temporibus! Provident dolorum incidunt corrupti! Expedita!</h1>
      </div>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  $('#wrapper-bg').fadeOut();
  $('#wrapper-bg').fadeIn();
  $('#logo').fadeOut();
  AOS.init();


  $(window).on("scroll", function() {
    if($(window).scrollTop() > 800) {
      $('nav').addClass('black');
      // $("nav ul li a").css("color", "#D75053");
      $('#logo').fadeIn();
    }
    else{
      $('nav').removeClass('black');
      // $("nav ul li a").css("color", "#000");
      $('#logo').fadeOut();
    }
  });
  // $(window).on("scroll", function() {
  //   if($(window).scrollTop() > 400 && $(this).scrollTop() < 800) {
      
  //   } else {
      
  //   }
  // });
</script>
</body>
</html>