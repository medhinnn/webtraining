

<!doctype html>
<html lang="en">
 <head>


   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">




   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


   <title>Contact Page</title>
 </head>
 <body>
    <div class="container info">
       <div class="row">


           <div class="card col-lg-5 col-md-5 col-sm-11 text-center mx-auto">
               <div class="accordion" id="accordionExample">
                   <div class="accordion-item">
                     <h2 class="accordion-header">
                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         <?php echo $employee1["name"] ?>
                       </button>
                     </h2>
                     <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                       <div class="accordion-body">


                           <div class="card col-lg-12 col-md-12 col-sm-12 text-center mx-auto">
                               <img class="card-img-top rounded-circle" src="https://placehold.co/50" alt="Card image">
                               <div class="card-body">
                                   <h4 class="card-title"><?php echo $employee1["name"] ?></h4>
                                   <br>
                                   <h6><?php echo $employee1["role"] ?> At <?php echo $employee1["company"] ?></h6>
                                   <p> <i> <?php echo $employee1["quote"] ?> </i> </p>
                               </div>
                           </div>


                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           <?php echo $employee2["name"] ?>
                       </button>
                     </h2>
                     <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                       <div class="accordion-body">


                           <div class="card col-lg-12 col-md-12 col-sm-12 text-center mx-auto">
                               <img class="card-img-top rounded-circle" src="https://placehold.co/50" alt="Card image">
                               <div class="card-body">
                                   <h4 class="card-title"><?php echo $employee2["name"] ?></h4>
                                   <br>
                                   <h6><?php echo $employee2["role"] ?> At <?php echo $employee2["company"] ?></h6>
                                   <p> <i> <?php echo $employee2["quote"] ?> </i> </p>
                               </div>
                           </div>


                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           <?php echo $employee3["name"] ?>
                       </button>
                     </h2>
                     <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                       <div class="accordion-body">


                           <div class="card col-lg-12 col-md-12 col-sm-12 text-center mx-auto">
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
                   </div>
                 </div>
           </div>


       </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
   </script>
   </body
 