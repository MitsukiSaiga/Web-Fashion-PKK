<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ====== Favicon ====== -->
    <link rel="icon" href="/img/logo-dv.png">
    <!-- ====== Boxicons ====== -->
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- ====== Swiper CSS ====== -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <!-- ====== Custom CSS ====== -->
    <link rel="stylesheet" href="/css/styles.css" />
    <title>{{$title}}</title>
  </head>
  <body style="overflow-x: hidden;">
    @yield('content')
    <!-- ====== SwiperJs ====== -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- ====== Custom Script ====== -->
    <script src="/js/product.js"></script>
    <script src="/js/main.js"></script>
  </body>
</html>
