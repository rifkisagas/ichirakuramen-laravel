<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
  @include('layouts.navbar')
  <div class="container-fluid">
    <img src="images/menu-bg.jpg" class="img-fluid" alt="Responsive image" style="opacity: 0.5;">
    <div class="row">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</body>
@include('layouts.foot')
@include('layouts.script')
<script>
AOS.init();
</script>
</html>