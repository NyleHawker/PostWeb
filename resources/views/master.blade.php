<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>{{config('app.name', 'POSTWEB')}}</title>
</head>
<body>
    
    <!-- nav bar -->
    @include('include.navbar')

    <div class="container p-0 m-5">
        <!-- session errors -->
        @include('include.message')
        <!-- all contents -->
        @yield('content')
    </div>

</body>
</html>