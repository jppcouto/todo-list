<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TO DO LIST</title>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome/font-awesome.min.css')}}">
    <script src="{{asset('assets/jquery-3.5.1.min.js')}}"></script>
</head>
<body>
    <style>
        body{
            background: linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);
            height: 100%;
        }
        h3{
            color: white;
        }
    </style>
    @yield('content')
    {{-- JS --}}
    <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>