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


    <title>YARE - Cheapest SMURF LOL Decent accounts all servers</title>
    <!--Ion Icons-->
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
{{$slot}}
</body>
</html>
