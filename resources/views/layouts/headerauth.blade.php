
    
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>

    {{-- FONT --}}
    <style type="text/css">
        @font-face {
            font-family: GothamRounded;
            src: url('{{asset('/font/GothamRounded-Medium.otf')}}');
        }
    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href={{ asset('css/style.css') }} rel="stylesheet" type="text/css">
    <link href={{ asset('css/main.css') }} rel="stylesheet" type="text/css">
    <link href={{ asset('css/main.mobile.css') }} rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:600" rel="stylesheet"> 

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>Login</title>
</head>
<body>

    <nav class="navbar navbar-light">
        <div class="container">
            <a class="navbar-brand" href={{ url('/', []) }}>
                <img src={{ asset('img/petori-logo.png') }} height="40px">
            </a>
        </div>
        
    </nav>
            

    <div class="page-login">
        @yield('content')
    </div>
   
</body>
</html>

