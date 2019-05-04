<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>e-PUPM</title>

    <link rel="icon" href="./favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />
    <!-- Custom Fonts -->
    {{-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
        rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/stylish-portfolio.css') }}" rel="stylesheet">

    <script src="{{ asset('js/require.min.js') }}"></script>
    <script>
        requirejs.config({
            "baseUrl": "/",
        });

    </script>

</head>

<body id="page-top">

    <!-- Header -->
    <header class="masthead d-flex">
        <div class="container text-center my-auto">
            <h1 class="mb-1">E-PUPM</h1>
            <h3 class="mb-5">
                <em>Aplikasi manajemen keuangan </em> <br>
                <em>untuk program Pengembangan Usaha Pangan Masyarakat. </em>
            </h3>

            @if (Route::has('login'))
                @auth
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ url('/home') }}">Home</a>
                @else
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ route('register') }}">Register</a>
                @endif
                @endauth
            @endif
            
        </div>
        <div class="overlay"></div>
    </header>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="https://facebook.com/reserviert97">
                        <i class="fe fe-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="https://twitter.com/latif_ardhi">
                        <i class="fe fe-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="https://github.com/reserviert97">
                        <i class="fe fe-github"></i>
                    </a>
                </li>
            </ul>
            <p class="text-muted small mb-0">Copyright &copy; ePUPM 2019</p>
        </div>
    </footer>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/stylish-portfolio.min.js') }}"></script>

</body>

</html>
