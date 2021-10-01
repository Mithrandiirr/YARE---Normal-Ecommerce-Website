<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="icon"  href="{{ asset('https://i.ibb.co/4ZgG1c8/ee.png')}}">

      <script src="{{ asset('https://unpkg.com/ionicons@5.4.0/dist/ionicons.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>YARE - Cheapest SMURF LOL Decent accounts all servers</title>
    <!--Ion Icons-->
    <link href="{{ asset('https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css')}}" rel="stylesheet">
    <!--Google Fonts-->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Nunito&display=swap')}}" rel="stylesheet">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Aldrich&display=swap')}}" rel="stylesheet">
    <!--Our own stylesheet-->
    <link rel="stylesheet" href="{{ asset('yes.css')}}">
    @livewireStyles
</head>
<body>
<header>
    <div class="container">

        <nav>
           <div class="nav-brand">
               <a href="index.html">
                   <img width="100%" src="" alt="">
               </a>
           </div>
           <div class="menu-icons open">

             <i class="icon ion-md-menu"></i>
           </div>
               <ul class="nav-list">
                 <div class="menu-icons close">
                   <i class="icon ion-md-close"></i>
                 </div>
                 <li class="nav-item">
                   <a href="file:///E:/Stuff/STUFFS/idkk/first/index.html" class="nav-link current">Home</a>
                 </li>

                 <li class="nav-item">
                   <a href="https://discord.gg/DeKcFEJN" class="nav-link">Support Server</a>
                 </li>
                 <li class="nav-item">
                    <a href="{{asset('contact')}}" class="nav-link">Contact Us</a>
                  </li>
                 <li class="nav-item">
                   <a href="{{asset('/faq')}}" class="nav-link">FAQ</a>
                 </li>
                 <li class="nav-item">
                   <a href="{{asset('/privacy')}}" class="nav-link">Privacy Policy</a>
                 </li>



                 @if(Route::has('login'))
                    @auth
                        @if(Auth::user()->utype === 'ADM')
                        <li class="nav__listitem">{{Auth::user()->name}}
                            <ul class="nav__listitemdrop">
                                <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
                                <li><a href="{{ route('logout')}}" onClick="event.preventDefault(); document.getElementById('logout-form').submit();"> Log Out</a></li>
                                <form id="logout-form" method="POST" action="{{route('logout')}}">
                                @csrf
                            </form>
                            </ul>
                        </li>
                          @else
                          <li class="nav__listitem">{{Auth::user()->name}}
                            <ul class="nav__listitemdrop">

                                <li><a href="{{ route('logout')}}" onClick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a></li>
                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                      @csrf
                                        </form>
                            </ul>
                          </li>
                        @endif

                 @else
                    <li class="nav-item2">
                        <a href="{{route('login')}}"  class="bu">Login</a>
                        <a href="{{route('register')}}"  class="bu">Register</a>
                      </li>
                    @endif
                 @endif
               </ul>
        </nav>

    </div>
</header>
 {{$slot}}
 <div class="credit-cards" style="text-align: center; width: 100% ; position: relative;">
    <img height="35" id="imggg" src="{{asset('imagg/accounts/stripe-logo.png')}}"/>
    <img height="20" id="imggg" src="{{asset('imagg/accounts/skrill.png')}}"/>
    <img height="45" id="imggg" src="{{asset('https://shoplineimg.com/assets/footer/card_paypal.png')}}"/>


  </div>
<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Accounts</h3>
                    <ul>
                        <li><a href="{{asset('accounts')}}">All Accounts</a></li>
                        <li><a href="{{asset('unranked')}}">Unranked Accounts</a></li>
                        <li><a href="{{asset('botted')}}">Botted Accounts</a></li>
                        <li><a href="{{asset('regular')}}">Regular Accounts</a></li>
                    </ul>
                </div>

                <div class="col-sm-6 col-md-3 item">

                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>YARE</h3>
                    <p>YARE sells only <strong>decent</strong> and high MMR accounts, likewise never got banned or  hacked or any other sort of bad instruction.We provide a secured environment and an ultimate safe payment methods.</p>
                </div>

                <div class="col item social"><a href="https://discord.gg/DeKcFEJN"><i class="fab fa-discord"></i></a></div>

            </div>
            <p class="copyright">YARE © 2021</p>
        </div>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

<!-- Footer-->

 {{-- <footer class="footer1">
     <div class="container1">
      <div class="row">
        <div class="footer-col">
          <h4>company</h4>
          <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate program</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Coaching</a></li>
            <li><a href="#">Accounts</a></li>
            <li><a href="#">Boosting</a></li>
            <li><a href="#">Apply for job</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>YARE</h4>
<p>
    TEST TEST TES TEST ETST TESTE TES TE TEST
</p>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <div class="content_right">
            <div class="more_detail">

                <p>In publishing and graphic design,<br> Lorem is a placeholder.</p>

                <div class="form">
                    <input class="inputt" type="email" placeholder="Enter Email">
                    <button><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
      </div>
     </div>


     </div>
  </footer>
<footer>
  <p class="rights">&copy; 2021 YARE. All rights reserved.</p>

</footer> --}}

    <script type="text/javascript" src="{{asset('scripts.js')}}"></script>
    @livewireScripts
</body>
</html>
