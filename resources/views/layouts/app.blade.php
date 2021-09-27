<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YARE - Login/Register</title>
    <link rel="icon"  href="{{asset('https://i.ibb.co/4ZgG1c8/ee.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/pages/auth.css') }}">
    {{-- message toastr --}}


</head>
<style>
    .form-group[class*=has-icon-].has-icon-left .form-select {
    padding-left: 2.5rem;
}
</style>

<body>
   @yield('content')
</body>
</html>
