
    
    

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
            src: url('{{asset('/font/GothamRounded-Book.otf')}}');
            src: url('{{asset('/font/GothamRounded-Medium.otf')}}');
        }
    </style>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href={{ asset('css/style.css') }} rel="stylesheet" type="text/css">
    <link href={{ asset('css/main.css') }} rel="stylesheet" type="text/css">
    <link href={{ asset('css/main.mobile.css') }} rel="stylesheet" type="text/css">


    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> 
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:400" rel="stylesheet">  --}}

    <script src={{ asset('js/main.js') }}></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>petori</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src={{ asset('img/petori-logo.png') }} height="40px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Layanan<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Kontak<span class="sr-only">(current)</span></a>
                    </li>
                    
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href={{ url('/auth/login', []) }}>Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ url('/auth/register', []) }}>Register</a>
                    </li>
                </ul>
            </div>
        </div>
        
    </nav>


    @yield('content')


    <script>
        $(document).ready(function() {

            $(document).scroll(function() {
                var $nav = $(".navbar");
                $nav.toggleClass('navbar-scrolled', $(this).scrollTop() > $nav.height());
            })

        })
    </script>


</body>
</html>

