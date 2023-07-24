<!DOCTYPE html>
<html>
  <head> 
    @include('agent.agentcss')
  </head>
  <body>
    @include('agent.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('agent.sidebar')
      <!-- Sidebar Navigation end-->
      @include('agent.body')
        @include('agent.footer')
    <!-- JavaScript files-->
    <script src="Agent/vendor/jquery/jquery.min.js"></script>
    <script src="Agent/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="Agent/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="Agent/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="Agent/vendor/chart.js/Chart.min.js"></script>
    <script src="Agent/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="Agent/js/charts-home.js"></script>
    <script src="Agent/js/front.js"></script>
  </body>
</html>