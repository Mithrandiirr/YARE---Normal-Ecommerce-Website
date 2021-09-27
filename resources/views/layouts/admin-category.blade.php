<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YARE- Admin Dashboard</title>
    <link rel="icon"  href="{{asset('https://i.ibb.co/4ZgG1c8/ee.png')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendors/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
 <link rel="shortcut icon" href="{{asset('assets/images/favicon.svg') }}" type="image/x-icon">
   <link rel="stylesheet" href="{{asset('assets/vendors/simple-datatables/style.css') }}">
   <link rel="stylesheet" type="text/css" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css')}}">
   <link href="{{asset('https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css')}}" rel="stylesheet" type="text/css">
<script src="{{asset('https://cdn.jsdelivr.net/npm/simple-datatables@latest')}}" type="text/javascript"></script>
    <!--Our own stylesheet-->
    <link rel="stylesheet" href="{{ asset('admin-category.css')}}">
    @livewireStyles
</head>
<body>



 {{$slot}}
<!-- Footer-->

<footer>
  <p class="rights">&copy; 2021 YARE. All rights reserved.</p>

</footer>

    <script type="text/javascript" src="{{asset('scripts.js')}}"></script>
    @livewireScripts
</body>
</html>
