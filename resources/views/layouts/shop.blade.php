<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="UTF-8">
  <title>Hero - Li Xiang</title>
  <meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="HandheldFriendly" content="True">

  <link rel="stylesheet" href="/index/css/materialize.css">
  <link rel="stylesheet" href="/index/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/index/css/normalize.css">
  <link rel="stylesheet" href="/index/css/owl.carousel.css">
  <link rel="stylesheet" href="/index/css/owl.theme.css">
  <link rel="stylesheet" href="/index/css/owl.transitions.css">
  <link rel="stylesheet" href="/index/css/fakeLoader.css">
  <link rel="stylesheet" href="/index/css/animate.css">
  <link rel="stylesheet" href="/index/css/style.css">
  
  <link rel="shortcut icon" href="/index/img/favicon.png">

</head>
<body>

  <!-- navbar top -->
  <div class="navbar-top">
    <!-- site brand  -->
    <div class="site-brand">
      <a href="index.html"><h1>Hero李翔</h1></a>
    </div>
    <!-- end site brand  -->
    <div class="side-nav-panel-right">
      <a href="#" data-activates="slide-out-right" class="side-nav-left">
          <i class="fa fa-user"></i>
      </a>
    </div>
  </div>
  <!-- end navbar top -->
  <!-- loader -->
  <!-- <div id="fakeLoader"></div> -->
  <!-- end loader -->
  
  <!-- footer -->
  <!-- side nav right-->
  <div class="side-nav-panel-right">
    <ul id="slide-out-right" class="side-nav side-nav-panel collapsible">
      <li class="profil">
        <img src="/index/img/profile.jpg" alt="">
        <h2>Li Xiang</h2>
      </li>
      <li><a href="setting.html"><i class="fa fa-cog"></i>Settings</a></li>
      <li><a href="about-us.html"><i class="fa fa-user"></i>About Us</a></li>
      <li><a href="contact.html"><i class="fa fa-envelope-o"></i>Contact Us</a></li>
      <li><a href="{{url('login/login')}}"><i class="fa fa-sign-in"></i>Login</a></li>
      <li><a href="{{url('login/reg')}}"><i class="fa fa-user-plus"></i>Register</a></li>
    </ul>
  </div>

  @yield('content')

 <div class="footer">
    <div class="container">
      <div class="about-us-foot">
        <h6>Hero Lixiang</h6>
        <p>You complete me</p>
      </div>
      <div class="social-media">
        <a href=""><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-twitter"></i></a>
        <a href=""><i class="fa fa-google"></i></a>
        <a href=""><i class="fa fa-linkedin"></i></a>
        <a href=""><i class="fa fa-instagram"></i></a
      </div>
      <div class="copyright">
        <span>© 2019 All Right Reserved</span>
      </div>
    </div>
  </div>
  <!-- end footer -->
  
  <!-- scripts -->
  <script src="/index/js/jquery.min.js"></script>
  <script src="/index/js/materialize.min.js"></script>
  <script src="/index/js/owl.carousel.min.js"></script>
  <script src="/index/js/fakeLoader.min.js"></script>
  <script src="/index/js/animatedModal.min.js"></script>
  <script src="/index/js/main.js"></script>

</body>
</html>