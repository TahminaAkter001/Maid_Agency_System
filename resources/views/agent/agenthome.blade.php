<!DOCTYPE html>
<html>
@include('agent.agentcss')
  <body>
    @include('agent.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('agent.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-user-1"></i></div><strong>Our Clients</strong>
                    </div>
                  </div> 
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-user-1"></i></div><strong><a href="{{ url('appointed_maid') }}"> Appointment information</a></strong>
                    </div>
                  </div> 
                </div>
              </div>
              
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>New Invoices</strong>
                    </div>
                    <div class="number dashtext-3">140</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>All Projects</strong>
                    </div>
                    <div class="number dashtext-4">41</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
     
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