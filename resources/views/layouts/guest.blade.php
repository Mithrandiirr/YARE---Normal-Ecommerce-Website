{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html> --}}
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

    <title>YARE - Cheapest SMURF LOL Decent accounts all servers</title>
    <!--Ion Icons-->
    <link href="{{ asset('https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css')}}" rel="stylesheet">
    <!--Google Fonts-->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Nunito&display=swap')}}" rel="stylesheet">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Aldrich&display=swap')}}" rel="stylesheet">
    <!--Our own stylesheet-->
    <link rel="stylesheet" href="{{ asset('style1.css')}}">

    @livewireStyles
</head>
<body>

 {{$slot}}


</footer>

    <script type="text/javascript" src="{{asset('scripts.js')}}"></script>
    @livewireScripts
</body>
</html>
