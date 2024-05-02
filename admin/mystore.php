<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admine Home-pannel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <?php
     session_start();
     if(!$_SESSION['admin']){
      header("location:form/login.php");
     }

  ?>
  <body>
  <nav class="navbar bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white">Mysore</a>
    <span>
    <i class="fa-solid fa-user-tie"></i>
      Hello,<?php echo $_SESSION['admin'] ; ?>
      <i class="fa-solid fa-right-from-bracket"></i>
      <a href="form/logot.php" class="text-decoration-none text-white">Logout</a>
      <a href="" class="text-decoration-none text-white">Userpanel</a>
    </span>
  </div>
</nav>
       <div>
        <h2 class="text-center" >Dashbord</h2>
       </div>   
       <div class=" col-md-6 m-auto bg-danger text-center">
        <a href="product/index.php" class=" text-white text-decoration-none fs-4 fw-bold px-5">Add post</a>
        <a href="" class=" text-white text-decoration-none fs-4 fw-bold px-5">Users</a>
       </div> 
  

     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>