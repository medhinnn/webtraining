<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @notifyCss
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
    <title>@yield('title', 'Online Store')</title>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container"> <a class="navbar-brand" href="#">{{ __('Online Store') }}</a> <button class="navbar-toggler"
                type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="{{ route('home.index') }}">Home</a>

                    <a class="nav-link active" href="{{ route('product.index') }}">Products
                    </a>
                    <a class="nav-link active" href="{{ route('cart.index') }}">Cart
                    </a>
                    <a class="nav-link active" href="{{ route('home.about') }}">About</a>
                    <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                    @guest
                        <a class="nav-link active" href="{{ route('login') }}">login
                        </a>
                        <a class="nav-link active" href="{{ route('register') }}">register</a>
                        
                    @else

                        @if (Auth::user()->role == 'admin')
                        <a class="nav-link active" href="{{ route('myaccount.orders') }}">my order</a>
                            <a class="nav-link active" href="{{ route('admin.home.index') }}">Dashboard</a>
                        @endif
                        <form id="logout" action="{{ route('logout') }}" method="POST">
                            <a role="button" class="nav-link active"
                                onclick="document.getElementById('logout').submit();">logout({{ Auth::user()->role }})</a>
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>

    </nav>
    <header class="masthead bg-primary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>@yield('subtitle', 'A Laravel Online Store')</h2>
        </div>
    </header>
    <!-- header -->
    <div class="container my-4">@yield('content')
    </div>
    <div class=" py-4 text-center text-white footer">
        <div class="container"> <small class="copyright"> Copyright - <a class="text-reset fw-bold text-decoration-none"
                    target="_blank" href="https://twitter.com/user"> FirstName LastName
                </a> - <b>XYZ Company</b> </small></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    @notifyJs
    @include('notify::components.notify')
</body>

</html>
