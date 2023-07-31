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

    </style>

    @include('agent.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('agent.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">

        <div class="addTool">
            <button class="success"><a href="{{ url('/show_maid')}}">View Maid</a> </button>
        </div>
<!------your code here--->
        <!-- Horizontal Form-->
        <div class="col-lg-6">
                <div class="block center">
                  <div class="title"><strong class="d-block">Maid Form</strong><span class="d-block"></span></div>
                  <div class="block-body">


                    <form  class="form-horizontal" action="{{ url('/add_mpost')}}" method="POST" enctype="multipart/form-data">

                      @csrf

                      <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Select Service  </label>
                        <select class="form-select col-sm-3 form-control-label" name="serv_id">
                        <div class="col-sm-9">
                          <option id="inputHorizontalSuccess" type="text" placeholder="Select a Service" class="form-control form-control-success"></option><small class="form-text"></small>
                          @foreach($service as $item)
                          <option value="{{ $item->id}}">{{ $item->name }}></option>
                          @endforeach
                        </div>
                        </select>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Name</label>
                        <div class="col-sm-9">
                          <input id="inputHorizontalSuccess" type="text" name="name" placeholder="Enter service Name" class="form-control form-control-success"><small class="form-text"></small>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Slug</label>
                        <div class="col-sm-9">
                          <input id="inputHorizontalSuccess" type="text" name="slug" placeholder="Enter slug" class="form-control form-control-success">
                        
                      </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Age</label>
                        <div class="col-sm-9">
                          <input id="inputHorizontalSuccess" type="text" name="age" placeholder="Enter age" class="form-control form-control-success">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Nationality</label>
                        <div class="col-sm-9">
                          <input id="inputHorizontalSuccess" type="text" name="nationality" placeholder="Enter nationality" class="form-control form-control-success">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Gander</label>
                        <div class="col-sm-9">
                          <input id="inputHorizontalSuccess" type="text" name="gander" placeholder="Enter gender" class="form-control form-control-success">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Experience</label>
                        <div class="col-sm-9">
                          <input id="inputHorizontalSuccess" type="text" name="experience" placeholder="Enter Year of exp." class="form-control form-control-success">
                        </div>
                        </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Contact No</label>
                        <div class="col-sm-9">
                          <input id="inputHorizontalSuccess" type="text" name="contact" placeholder="Enter Year of exp." class="form-control form-control-success">
                        </div>
                        </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Details</label>
                        <div class="col-sm-9">
                          <textarea id="inputHorizontalSuccess" type="text" name="details" placeholder="Enter details" class="form-control form-control-success"></textarea><small class="form-text"></small>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Salary</label>
                        <div class="col-sm-9">
                          <textarea id="inputHorizontalSuccess" type="text" name="salary" placeholder="Enter Salary" class="form-control form-control-success"></textarea><small class="form-text"></small>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">NID Number</label>
                        <div class="col-sm-9">
                          <textarea id="inputHorizontalSuccess" type="text" name="nid" placeholder="Enter Salary" class="form-control form-control-success"></textarea><small class="form-text"></small>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Address</label>
                        <div class="col-sm-9">
                          <textarea id="inputHorizontalSuccess" type="text" name="address" placeholder="Enter Salary" class="form-control form-control-success"></textarea><small class="form-text"></small>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Maid Image</label>
                        <div class="col-sm-9">
                          <input id="inputHorizontalWarning" type="file" placeholder="Image" name="image" class="form-control form-control-warning"><small class="form-text"></small>
                        </div>
                      </div>

                      <div class="form-group row">       
                        <div class="col-sm-9 offset-sm-3">
                          <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                      </div>
                    </form>


                  </div>
                </div>
              </div>
              <!--form end-->

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