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
                           <a class="nav-link " href="{{ route('home.tools') }}">Tools</a>
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
                     <li><a href="about.html">About</a></li>
                     <li><a href="">Services</a></li>
                     <li><a href="{{ route('home.tools') }}">Tools</a></li>
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
                  </ul>
               </div>
            </div>
         </div>