<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="icon"  href="{{asset('https://i.ibb.co/4ZgG1c8/ee.png')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css')}}">
        <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">

    <title>YARE - Cheapest SMURF LOL Decent accounts all servers</title>
    <!--Ion Icons-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="{{asset('https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css')}}" rel="stylesheet">
    <!--Google Fonts-->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Nunito&display=swap')}}" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Aldrich&display=swap')}}" rel="stylesheet">
    <!--Our own stylesheet-->
    <link rel="stylesheet" href="{{asset('all.css')}}">

    <style>
    @media all and (min-width: 992px) {
	.dropdown-menu li{ position: relative; 	}
	.nav-item .submenu{
		display: none;
		position: absolute;
		left:100%; top:-7px;
	}
	.nav-item .submenu-left{
		right:100%; left:auto;
	}
	.dropdown-menu > li:hover{ background-color: #f1f1f1 }
	.dropdown-menu > li:hover > .submenu{ display: block; }
}
/* ============ desktop view .end// ============ */

/* ============ small devices ============ */
@media (max-width: 991px) {
  .dropdown-menu .dropdown-menu{
      margin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
  }
}
    </style>
    @livewireStyles
</head>
<body>
    <header>
        <div class="container">

            <nav>
               <div class="nav-brand">
                   <a href="{{asset('/')}}">
                       <img width="100%" src="{{asset('headd.png')}}" alt="">
                   </a>
               </div>
               <div class="menu-icons open">

                 <i class="icon ion-md-menu"></i>
               </div>
                   <ul class="nav-list">
                     <div class="menu-icons close">
                       <i class="icon ion-md-close"></i>
                     </div>



                     <li class="nav-item2">
                       <a href="#" >
                         <ion-icon name="cart" role="img" class="md hydrated" aria-label="cart" style="
        font-size: 27px;
    "></ion-icon>
                       </a>
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
<!-- Footer-->
<div class="credit-cards" style="text-align: center; width: 100% ; position: relative;">
    <img height="35" src="{{asset('imagg/accounts/Stripe-L ogo.png')}}"/>
    <img height="20" src="{{asset('imagg/accounts/skrill.png')}}"/>
    <img height="45" src="{{asset('https://shoplineimg.com/assets/footer/card_paypal.png')}}"/>


  </div>
<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Accounts</h3>
                    <ul>
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



   <script type="text/javascript" src="{{asset('all.js')}}"></script>
   <script>

// document.addEventListener("DOMContentLoaded", function(){
// // make it as accordion for smaller screens
// if (window.innerWidth < 992) {

//   // close all inner dropdowns when parent is closed
//   document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
//     everydropdown.addEventListener('hidden.bs.dropdown', function () {
//       // after dropdown is hidden, then find all submenus
//         this.querySelectorAll('.submenu').forEach(function(everysubmenu){
//           // hide every submenu as well
//           everysubmenu.style.display = 'none';
//         });
//     })
//   });

//   document.querySelectorAll('.dropdown-menu a').forEach(function(element){
//     element.addEventListener('click', function (e) {
//         let nextEl = this.nextElementSibling;
//         if(nextEl && nextEl.classList.contains('submenu')) {
//           // prevent opening link if link needs to open dropdown
//           e.preventDefault();
//           if(nextEl.style.display == 'block'){
//             nextEl.style.display = 'none';
//           } else {
//             nextEl.style.display = 'block';
//           }

//         }
//     });
//   })
// }
// // end if innerWidth
// });
// DOMContentLoaded  end

   </script>
   @livewireScripts
</body>
</html>
