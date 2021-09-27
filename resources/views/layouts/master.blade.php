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
    {{-- message toastr --}}


</head>
<style>
    .form-group[class*=has-icon-].has-icon-left .form-select {
    padding-left: 2.5rem;
}
</style>

<body>
    <div id="app">
        @yield('menu')
        {{-- content main page --}}
        @yield('content')

    </div>


    <script src="{{asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{asset('assets/js/pages/dashboard.js') }}"></script>
    <script src="{{asset('assets/js/main.js') }}"></script>


    <script src="{{asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="{{asset('assets/js/main.js') }}"></script>



</body>

</html>
