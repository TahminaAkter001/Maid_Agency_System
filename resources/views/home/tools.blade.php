<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Borrow Tools</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="../Vegetable/css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="../Vegetable/css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="../Vegetable/css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="../Vegetable/images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="../Vegetable/css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="../Vegetable/css/owl.carousel.min.css">
<link rel="stylesheet" href="../Vegetable/css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>

<style>
    .img_des{
        height:300px;
        width:250px;
        padding:10px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }

    /* header section start */

.header_section {
    width: 100%;
    float: left;
    background-image: url(../images/banner.jpg);
    height: auto;
    background-size: 100%;
    padding: 0px 0px 20px 0px;
    background-repeat: no-repeat;
    background-position: center;
    height:800px;
}


.bg-light {
    background-color: green;
}

.logo {
    width: 100%;
    float: left;
    text-align: center;
    padding: 20px 0px 50px 0px;
}

.logo_mobile {
    width: 100%;
    float: left;
    text-align: center;
    padding-bottom: 20px;
}

.mobile_menu {
    width: 100%;
    float: left;
    display: none;
}

.navbar-light .navbar-nav .nav-link {
    font-size: 18px;
    text-transform: uppercase;
    color: #000;
}

.navbar-nav {
    align-items: center;
}

.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
    border-radius: 20px;
    border: 2px solid #fff;
    color: #fff;
}

.navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 20px;
    padding-left: 20px;
}

.nav-item {
    position: relative;
}

.menu_main {
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
    width: 100%;
    text-align: center;
    margin: 0 auto;
}

.menu_main ul {
    margin: 0px;
    padding: 0px;
    list-style: none;
    display: inline-flex;
}

.menu_main li {
    float: left;
    padding-left: 10px;
    padding-right: 10px;
    font-size: 18px;
    text-transform: uppercase;
    padding-top: 10px;
    padding-bottom: 10px;
    color: #000;
    border-radius: 40px;
}

.menu_main li a {
    color: #000;
    padding: 10px 20px;
    border-radius: 10px;
    font-weight:bold;
}

.menu_main li a:hover {
    color: #ffffff;
    background-color: #2b2278;
}

.mb-lg-0,
.my-lg-0 {
    margin-bottom: 0!important;
    width: 20%;
    float: left;
}

.header_main {
    width: 100%;
    background-image: url(../images/header-bg.png);
    background-size: 100%;
    padding: 10px 0px 0px 0px;
}
.container-fluid{
    width:80%;
}
.buy_bt_1 a{
    margin-top:10px;
}


/* header section end */
</style>



@include('home.header')

<div class="vegetables_section layout_padding">
    <div class="container-fluid">
      <div class="image_2"><img src=""></div>
      <h1 class="about_taital">Tools for Borrow</h1>
      <p class="lorem_text">Reader will be distracted by the readable content of a</p>
      <div class="vegetables_section_2 layout_padding">
        <div class="row">
            @foreach($post as $post)
          <div class="col-4">
            <div class="box_section">
              <div class="image_4"><img class="img_des" src="ProductImage/{{$post->image}}"></div>
              <h2 class="dolor_text">{{ $post->p_name}}</h2>
              <div class="buy_bt_1 active"><a href="{{  url('/borrow', ['id' => $post->id]) }}">Borrow</a></div>
            </div>
          </div>
          
       
          @endforeach
        </div>
      </div>
      <div class="read_bt_1"><a href="#">Read More</a></div>
    </div>
  </div>
  <!-- Javascript files-->
  <script src="../Vegetable/js/jquery.min.js"></script>
  <script src="../Vegetable/js/popper.min.js"></script>
  <script src="../Vegetable/js/bootstrap.bundle.min.js"></script>
  <script src="../Vegetable/js/jquery-3.0.0.min.js"></script>
  <script src="../Vegetable/js/plugin.js"></script>
  <!-- sidebar -->
  <script src="../Vegetable/js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="../Vegetable/js/custom.js"></script>
  <!-- javascript --> 
  <script src="../Vegetable/js/owl.carousel.js"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>
