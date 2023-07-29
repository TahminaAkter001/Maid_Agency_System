<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="../Agent/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="{{ route('home')}}"> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{ url('/show_service')}}"> <i class="icon-grid"></i>Services </a></li>
                <li><a href="{{ url('/show_maid')}}"> <i class="fa fa-bar-chart"></i>Maids </a></li>
                <li><a href="{{ url('/show_post')}}"> <i class="icon-padnote"></i>Tool Management </a></li>
                <li><a href="{{ route('login')}}"> <i class="icon-logout"></i>Login page </a></li>
        </ul><span class="heading">Extras</span>
        <ul class="list-unstyled">
          <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
        </ul>
      </nav>