

<!doctype html>
<html lang="en">
 <head>


   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">




   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


   <title>Contact Page</title>
 </head>
 <body>
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
.bg-secondary{

background-color: #2c3e50 !important;

}
.copy-right{
background-color: #1a252f !important;

}
.bg-primary{
background-color: #1abc9c !important;
}
.nav{
font-weight: 700;

}
.img-card{
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
                   <a class="nav-link active" href="/index">Home</a>
                   <a class="nav-link active" href="/product">Products</a>
                   <a class="nav-link active" href="/cart">Cart</a>
                   <a class="nav-link active" href="/about">About</a>
                </div>
            </div>
       </div>
   </nav>
   <header class="masthead bg-primary text-white text-center py-4">
       <div class="container d-flex align-items-center flex-column">
         <h2>A Laravel Online employee  list</h2>
       </div>
   </header>
 <div class="container info">
       <div class="row">


           <div class="card col-lg-4 col-md-6 col-sm-12 text-center mx-auto">
               <img class="card-img-top rounded-circle" src="{{ asset('/img/4.jpeg') }}" alt="Card image">
               <div class="card-body">
                   <h4 class="card-title"><?php echo $employee1["name"] ?></h4>
                   <br>
                   <h6><?php echo $employee1["role"] ?> At <?php echo $employee1["company"] ?></h6>
                   <p> <i> <?php echo $employee1["quote"] ?> </i> </p>
               </div>
           </div>


           <div class="card col-lg-4 col-md-6 col-sm-12 text-center mx-auto">
               <img class="card-img-top rounded-circle" src="{{ asset('/img/game.png') }}" alt="Card image">
               <div class="card-body">
               <h4 class="card-title"><?php echo $employee2["name"] ?></h4>
                   <br>
                   <h6><?php echo $employee2["role"] ?> At <?php echo $employee2["company"] ?></h6>
                   <p> <i> <?php echo $employee2["quote"] ?> </i> </p>
               </div>
           </div>


           <div class="card col-lg-4 col-md-6 col-sm-12 text-center mx-auto">
               <img class="card-img-top rounded-circle" src="https://placehold.co/50" alt="Card image">
               <div class="card-body">
               <h4 class="card-title"><?php echo $employee3["name"] ?></h4>
                   <br>
                   <h6><?php echo $employee3["role"] ?> At <?php echo $employee3["company"] ?></h6>
                   <p> <i> <?php echo $employee3["quote"] ?> </i> </p>
               </div>
           </div>




       </div>
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
   </body
 