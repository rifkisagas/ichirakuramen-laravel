<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
  <header>
  @include('layouts.navbar')
  <img src="images/ramen-waiter.jpg" class="img-fluid" alt="Responsive image" style="opacity: 0.5;">
  </header>
</body>
@include('layouts.foot')
@include('layouts.script')
<script>
AOS.init();
</script>
</html>