<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />

  <title>OtherTees - Popkulturowe koszulki w najlepszym wydaniu!</title>
  <base href="{{asset('')}}">
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:600&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css' />
        <link href="http://fonts.googleapis.com/css?family=Anonymous+Pro" rel="stylesheet" />
        <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" />

  <link href="style/bootstrap.min.css" rel="stylesheet" />

  <link href="style/font-awesome.min.css" rel="stylesheet" />
  <link href="style/css.css" rel="stylesheet" />
  <link href="style/styled1aa.css?v=1.6.14" rel="stylesheet" />
  <link href="style/limited1a0c.css?v=2.0.44" rel="stylesheet" />
  <link href="style/stylecuong.css" rel="stylesheet" />
  <link href="style/limited1a0cphuong.css?v=2.0.44" rel="stylesheet" />
  <link href="style/limited1a0cp2.css?v=2.0.44" rel="stylesheet" />
  <link href="style/lightslider.min.css" rel="stylesheet" />
  <link href="style/limited1a0ccuong.css?v=2.0.44" rel="stylesheet" />
  <link href="style/navbare7a6.css?v-1.1.4" rel="stylesheet" />
  <link href="style/hang.css?v=1.6.14" rel="stylesheet" />
  <link href="style/shop1a0c.css?v=2.0.44" rel="stylesheet" />
  <link rel="stylesheet" href="style/font-awesome.min.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.responsiveslides.min.js"></script>
  <script type="text/javascript" src="js/jquery.nospam.js"></script>
  <script type="text/javascript" src="js/jquery.lightslider.min.js"></script>
  <script type="text/javascript" src="js/functions.limited5fa9.js?v=1.4.15"></script>
  </head>
  <body>
    <div class="social-icons hidden-sm hidden-xs">
      <div class="facebook" onclick="window.open('https://www.facebook.com/OtherTees', '_blank');"><img src="photos/shop/facebook.png"></div>
      <div class="instagram" onclick="window.open('https://www.instagram.com/othertees/', '_blank');"><img src="photos/shop/instagram.png"></div>
      <div class="twitter" onclick="window.open('https://twitter.com/OtherTees', '_blank');"><img src="photos/shop/twitter.png"></div>
    </div>
    <div id="fb-root"></div>
  <a class="airmail-desktop enver hidden-xs" id="airmail" href="#airmail">
    <img src="photos/shop/airmail.png" alt="Shipping &amp; Printing Schedule" title="Shipping &amp; Printing Schedule">
    <span>Shipping &amp; Printing Schedule</span>
  </a>
  <div class="shipping-panel">
    <div class="hide-panel"><a href="#"><span class="glyphicon glyphicon-remove"></span></a></div>
    <h2>Shipping &amp; Printing Schedule</h2>
    <div class="shipping-schedule">
      <div class="loader">Please wait, loading ...</div>
    </div>
  </div>
  <div class="panel-overlay"></div>
  @include('frontend.layout.header')
  @yield('content')
  @include('frontend.layout.footer')
  @yield('script')
</body>
</html>
