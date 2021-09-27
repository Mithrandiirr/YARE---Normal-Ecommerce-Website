<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="icon"  href="{{asset('https://i.ibb.co/4ZgG1c8/ee.png')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css')}}">
        <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
        <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&display=swap')}}" rel="stylesheet">


        <link href="{{asset('https://fonts.googleapis.com/css?family=Aldrich&display=swap')}}" rel="stylesheet">
    <title>YARE - Cheapest SMURF LOL Decent accounts all servers</title>
    <!--Ion Icons-->
    <link href="{{asset('https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css')}}" rel="stylesheet">
    <!--Google Fonts-->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Nunito&display=swap')}}" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Aldrich&display=swap');
        </style>
         <link rel="stylesheet" href="{{asset('pay.css')}}">
    @livewireStyles
</head>
<body>
    {{$slot}}




    <script src="https://js.stripe.com/v3/" defer></script>


    <script type="text/javascript" src="{{asset('pay.js')}}"></script>
    <script type="text/javascript">

         const btns = document.getElementsByClassName("list-group-item list-group-item-action");

         var btnContainer = document.getElementById("myDIV");

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");

    // If there's no active class
    if (current.length > 0) {
      current[0].className = current[0].className.replace(" active", "");
    }

    // Add the active class to the current/clicked button
    this.className += " active";
  });
}
// $('#check').change(function () {
//     $('#submitBtn').prop("disabled", !this.checked);
// }).change()


    </script>
</body>

