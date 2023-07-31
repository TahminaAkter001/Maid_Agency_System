<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      
      @include('home.homecss')
    
    </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
         <!-- banner section start -->
         @include('home.banner')
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Services </h1>
            <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-3">
                     <div><img src="images/maid2.jpg" class="services_img"></div>
                     <div class="btn_main"><a href="{{ route('home.services',['slug' => 'cooking']) }}">Cooking</a></div>
                  </div>
                  <div class="col-md-3">
                     <div><img src="images/malemaid.png" class="services_img"></div>
                     <div class="btn_main"><a href="{{ route('home.services',['slug' => 'cleaning']) }}">Cleaning</a></div>
                  </div>
                  <div class="col-md-3">
                     <div><img src="images/maid2.jpg" class="services_img"></div>
                     <div class="btn_main"><a href="{{ route('home.services',['slug' => 'nanny']) }}">Nanny</a></div>
                  </div>
                  <div class="col-md-3">
                     <div><img src="images/malemaid.png" class="services_img"></div>
                     <div class="btn_main"><a href="{{ route('home.services',['slug' => 'car-washing']) }}">Car Washing</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- about section start -->
      @include('home.about')
      <!-- about section end -->
      @include('home.contact')
      <!-- footer section start -->
      @include('home.footer')
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>