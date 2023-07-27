<!DOCTYPE html>
<html>
@include('agent.agentcss')
  <body>
    <style>
        .success{
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .center{
          align: center;
        }
        .img_deg{
          height:100px;
          width:150px;
          padding:10px;
        }
        .block{
          width:100%!important;
        }

    </style>

    @include('agent.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('agent.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="addTool">
            <button class="success"><a href="{{url('/addtools')}}">Add new Tool</a> </button>
        </div>
<!------your code here--->
       
<div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Product Table</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-sm">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Price</th>
                          <th>Details</th>
                          <th>Quantity</th>
                          
                        </tr>
                      </thead>

                      
                      <tbody>
                      @foreach($post as $post)
                        <tr>
                          
                          <td>{{ $post->p_name}}</td>
                          <td>
                            <img class="img_deg" src="ProductImage/{{ $post->image}}" alt="">
                          </td>
                          <td>{{ $post->p_price}}</td>
                          <td>{{ $post->p_details}}</td>
                          <td>{{ $post->p_quantity}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                      
                    </table>
                  </div>
                </div>
              </div>

      @include('agent.footer')
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="../Agent/vendor/jquery/jquery.min.js"></script>
    <script src="../Agent/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../Agent/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../Agent/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../Agent/vendor/chart.js/Chart.min.js"></script>
    <script src="../Agent/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="../Agent/js/charts-home.js"></script>
    <script src="../Agent/js/front.js"></script>
  </body>
</html>