<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/fontawesome.min.css') }}">


    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <style>
        .bg-aypao {
            background-color: #b700b7;
            border-color: #ff0080;

        }

        .bg-aypao-header {
            background-color: #ff53ff;
            /* border-color: #ff0080; */

        }

        .bg-aypao-header-sub {
            background-color: #ffbfff;
            /* border-color: #ff0080; */

        }

        .nav-link {
            color: white;
        }

    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-aypao text-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">AYPAO-SERVICE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('cctv') }}">CCTV</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('cctv') }}">CCTV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Compuser Asset</a>
                    </li>
                    <li class="nav-item">
                        @auth

                            <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
                        @endauth
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                    </li>
                    <li class="nav-item">

                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    {{-- ///// --}}
    @stack('script')
    {{-- ////// --}}
</head>


<body>

    <main>
        <br>
        <div class="container">
            @yield('content')

        </div>
    </main>
</body>
@stack('script-footer')

</html>
