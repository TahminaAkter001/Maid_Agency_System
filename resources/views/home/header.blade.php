<style>

.dropdown ul {
  display: block;
  position: absolute;
  left: 14px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
  border-radius: 4px;
}

.dropdown ul li {
  min-width: 200px;
}

.dropdown ul a {
  padding: 10px 20px;
  font-size: 14px;
  text-transform: none;
  font-weight: 500;
  color: #0c3c53;
}

.dropdown ul a i {
  font-size: 12px;
}

.dropdown ul a:hover,
.dropdown ul .active:hover,
.dropdown ul li:hover>a {
  color: #47b2e4;
}

.dropdown:hover>ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.dropdown .dropdown:hover>ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

@media (max-width: 1366px) {
  .dropdown .dropdown ul {
    left: -90%;
  }

  .dropdown .dropdown:hover>ul {
    left: -100%;
  }
}


</style>


<div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="index.html"><img src=""></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('home') }}">Services</a>
                           
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="">Tools</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="{{ route('home.payment') }}">Payment</a>
                        </li>
                        @if (Route::has('login'))
                     @auth
                     <li class="nav-item"><x-app-layout>
   
                    </x-app-layout></li>
                     @else
                     <li class="nav-item"><a class="nav-link " href="{{ route('login') }}">Login</a></li>
                     @if (Route::has('register'))
                     <li class="nav-item"><a class="nav-link " href="{{ route('register') }}">Registration</a></li>
                     @endif
                     @endauth
                     @endif
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"><a href="{{ route('home') }}"><img src=""></a></div>
               <div class="menu_main">
                  <ul>
                     <li class="active"><a href="{{ route('home') }}">Home</a></li>

                     <ul>
              <li class="dropdown"><a href="#"><span>Services</span></i></a>
                <ul>
                  <li><a href="{{ route('home.services',['slug' => 'cleaning']) }}">Cleaning</a></li>
                  <li><a href="{{ route('home.services',['slug' => 'cooking']) }}">Cooking</a></li>
                  <li><a href="{{ route('home.services',['slug' => 'nanny']) }}">Nanny</a></li>
                  <li><a href="{{ route('home.services',['slug' => 'car-washing']) }}">Car Washing</a></li>
                </ul>
              </li>

                     <li><a href="{{ url('/tools')}}">Tools</a></li>
                     <li><a href="{{ route('home.payment') }}">Payment</a></li>
                     
                     @if (Route::has('login'))
                     @auth
                     <li><x-app-layout>
   
                    </x-app-layout></li>
                     @else
                     <li><a href="{{ route('login') }}">Login</a></li>
                     @if (Route::has('register'))
                     <li><a href="{{ route('register') }}">Registration</a></li>
                     @endif
                     @endauth
                     @endif
                     <li><a href="{{ url('/cart') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>
                  </ul>
               </div>
            </div>
         </div>