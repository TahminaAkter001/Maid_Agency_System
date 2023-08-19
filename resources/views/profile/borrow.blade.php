<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      
      @include('home.homecss')
      <title>Maid Details</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
   <body>

    <style>
        .container{
            width:60%!important;
        }
        h2{
            font-size:36px!important;
            text-align:center;
            margin:20px 0!important;
        }
        .img_deg{
            height: 80px;
            width:80px!important;
        }
    </style>
      <!-- header section start -->
      
         @include('home.header')

    <div class="card">
      Profile
    </div>

         <h2 class="center">Borrowed Item</h2>
        <div class="container">
         <table class="table table-striped">
            <thead>
                
              <tr>
                
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">status</th>
                <th scope="col">Return</th>
              </tr>
            </thead>
            <tbody>
                
              <tr>
                <th scope="row">{{$post->p_name}}</th>
                <td>
                    <img class="img_deg" src="../ProductImage/{{ $post->image}}" alt="">
                  </td>
                <td>Pending</td>
                <td><button class="btn btn-success" id="return" onclick="myFunction()">Return</button></td>
                
                
              </tr>
              
            </tbody>
          </table>
    
        </div>

        <script>
            function myFunction() {
              alert("Successfully item Returned!");
             
            }
            </script>
         
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