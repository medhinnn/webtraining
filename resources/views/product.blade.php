<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <title>Online Store</title>
    <style>
        .bg-secondary {

            background-color: #2c3e50 !important;

        }

        .copy-right {
            background-color: #1a252f !important;

        }

        .bg-primary {
            background-color: #1abc9c !important;
        }

        .nav {
            font-weight: 700;

        }

        .img-card {
            height: 18vw;
            object-fit: cover;
        }
    .footer {
   background-color: #1a252f;
   position: absolute;
   bottom: 3%;
   right: 0%;
   left: 0%;


}

    </style>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a class="navbar-brand" href="#">Online Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="/employees-list">Home</a>
                    <a class="nav-link active" href="/product">Products</a>
                    <a class="nav-link active" href="/cart">Cart</a>
                    <a class="nav-link active" href="/about">About</a>
                </div>
            </div>
        </div>
    </nav>
    <header class="masthead bg-primary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>list of products</h2>
        </div>
    </header>
    <div class="container d-flex align-items-center flex-column">
    <div class="row py-4">
        
            <div class="col-md-3 col-lg-4 mb-1 card mb-2">
                <img src="{{ asset('/img/game.png') }}" class="img-fluid rounded">
                <p class="text-center py-4">
                <a class="btn btn bg-primary text-white" href="/detail_lg" role="button">LG Tv</a>
                </p>
            </div>
            <div class="col-md-3 col-lg-4 mb-1 card mb-2">
                <img src="{{ asset('/img/safe.png') }}" class="img-fluid rounded">
                <p class="text-center py-4">
                <a class="btn btn bg-primary text-white" href="#" role="button">Iphone</a>
                </p>
            </div>
            <div class="col-md-3 col-lg-4 mb-1 card mb-2">
                <img src="{{ asset('/img/submarine.png') }}" class="img-fluid rounded">
                <p class="text-center py-4">
                <a class="btn btn bg-primary text-white" href="#" role="button">Chromecast</a>
                </p>
            </div>
        </div>
    </div>


    <!-- header -->
    <div class="container my-4">


       @yield('content')


   </div>





  
   <div class=" py-1 text-center text-white footer">
   <div class="container">
           <small class="copyright">
               Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                   href="https://twitter.com/user">
                   FirstName LastName
               </a> - <b>XYZ Company</b>
           </small>
       </div>
   </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>