<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>@yield('title', 'DigiMedia - Creative SEO HTML5 Template')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/templatemo-digimedia-v2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.css') }}">
</head>

<body>
  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  @include('front.layouts.partials.pre-header')
  @include('front.layouts.partials.header')

  @yield('content')

  @include('front.layouts.partials.footer')

  <!-- Scripts -->
  <script src="{{ asset('assets/front/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/front/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('assets/front/js/animation.js') }}"></script>
  <script src="{{ asset('assets/front/js/imagesloaded.js') }}"></script>
  <script src="{{ asset('assets/front/js/custom.js') }}"></script>
</body>
</html>