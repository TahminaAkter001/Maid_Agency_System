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
          height: 80px;
          width:80px;
        }

    </style>

    @include('agent.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('agent.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">


        <div class="col-lg-12">
          <div class="block">
            <div class="title"><strong>Product Table</strong></div>
            <div class="table-responsive"> 
              <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Gander</th>
                    <th>Nid</th>
                    <th>Starting Day</th>
                    
                  </tr>
                </thead>

                
                <tbody>
                  @foreach($post as $post)
                  <tr>
                    
                    <td>{{ $post->name}}</td>
                    <td>{{ $post->contact}}</td>
                    <td>{{ $post->age}}</td>
                    <td>{{ $post->address}}</td>
                    <td>{{ $post->gander}}</td>
                    <td>{{ $post->nid}}</td>
                    <td>{{ $post->start}}</td>
                    
                  </tr>
                  @endforeach
                </tbody>
                
              </table>
            </div>
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