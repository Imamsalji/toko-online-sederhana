<header>
         <!-- header inner -->
         <div class="header">
            <div class="head_top">
               <div class="container">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <ul class="sociel_link">
                         <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <p>Imamsalji7@gmail.com</p>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container" style="margin-top: -15px">
            <div class="row">
               <div style="width:800px;padding-right:146px">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu" >
                           <ul class="menu-area-main">
                           @guest
                              <li class="nav-item {{request()->is('home')? 'active' : ''}}"> <a href="{{ route('Dashboard1') }}">Home</a> </li>
                              <li class="nav-item {{request()->is('product')? 'active' : ''}}"> <a href="{{ route('produk') }}">product</a> </li>
                              <li class="nav-item {{request()->is('front')? 'active' : ''}}"> <a href="{{ route('pesan') }}"> Pesanan</a> </li>
                              <li class="nav-item {{request()->is('terima')? 'active' : ''}}"> <a href="{{ route('terima') }}">Penerimaan</a> </li>
                              <li class="nav-item {{request()->is('terima')? 'active' : ''}}" ><a href="{{ route('terima') }}">Contact</a> </li>
                           @else
                              <li class="nav-item {{request()->is('home')? 'active' : ''}}"> <a href="{{ route('home') }}">Home</a> </li>
                              <li class="nav-item {{request()->is('product')? 'active' : ''}}"> <a href="{{ route('produk') }}">product</a> </li>
                              <li class="nav-item {{request()->is('front')? 'active' : ''}}"> <a href="{{ route('pesan') }}"> Pesanan</a> </li>
                              <li class="nav-item {{request()->is('terima')? 'active' : ''}}"> <a href="{{ route('terima') }}">Penerimaan</a> </li>
                              <li class="nav-item {{request()->is('terima')? 'active' : ''}}" ><a href="{{ route('terima') }}">Contact</a> </li>
                           @endguest
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>  
            @guest
               <div style="float: right;display: flex;">
                  <li><a class="buy" href="login">Login</a></li>
               </div>
               @if (Route::has('register'))
               <div style="margin-left: 10px">
                  <li><a class="buy" href="register">SignUp</a></li>
               </div>
               @endif
            @else
            <div style="margin-left: 10px">
                  <li><a class="buy" href="#">Cart</a></li>
               </div>
               
               <div style="margin-left: 10px">
                                    <a class="buy" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    </div>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            @endguest
            
            </div>
         </div>
         <!-- end header inner --> 
      </header>