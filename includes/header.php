<?php include_once "sessions.php"; ?>

<!doctype html>  <!--SG.O_SqYGm4RZCXPMvm4sU5vg.ZsV5K3tFq-f-XvF8OHaJ1bRrRKbBd0Sj3c-I9Uzeo9w-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration - <?php echo $title ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/site.css"/>

  </head>

  <body >
  <nav class="navbar navbar-expand navbar-dark bg-primary">
   
   <div class="container-fluid">
   <a class="navbar-brand" href="index.php">School Registration</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  <div class="navbar-nav mr-auto">
    <a class="nav-link active" aria-current="page" href="index.php ">Home</a>
    <a class="nav-link" href="viewRecords.php">View Records</a>
    
  </div>
  <div class="navbar-nav ms-auto">

    <?php if(!isset($_SESSION['user_id'])){ ?>
       <a class="nav-link active" aria-current="page" href="login.php ">Login</span></a>

   <?php }else{ ?>
    
    <a class="nav-link active" aria-current="page" href="#"><span>Hello <?php echo $_SESSION['userName'] ?> !</span></span></a>
    <a class="nav-link active" aria-current="page" href="logOut.php ">Logout </a>

  <?php } ?>

  </div>
</div>
</div>
</nav>

    <div Class ="container">

    
<br>
        

