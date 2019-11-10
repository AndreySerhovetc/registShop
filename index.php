<?php
  require "/xampp/htdocs/bootstrap/db.php";
  //require "registration/registration.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="registration/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" >
        <a href="#" class="navbar-brand" >
            <img src="img/logo.png"
            width="50" height="50" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
        aria-expanded="false" aria-label="Tooglenavigation">
            <span class="navbrar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="" class="nav-link">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a href="#" class="nav-link">Products</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a href="#" class="nav-link" >Abot us</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="registration/registration.php" class="nav-link" >Log In</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <?php if(isset($_SESSION['log_user'])):?>
                            Привет, <?php echo $_SESSION['log_user']->login ?>
                            <a href="registration/logout.php" >Вийти</a>
                    <?php else: ?>
                        
                    <?php endif ?>
                    </li>
            </ul>
            <form action="" class="form-inline my-2 my-lg-o">
                <input type="text" class="form-control mr-sm-2 " placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
            </form>     
        </div>
    </nav>


        
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="center-block center" >Product list</h4>
            
           
        </div>
    </div>
    <div class="row"> 
        <?php include ("category.php") ?>
        <?php include ("productList.php") ?>
    </div>
</div>


    <script src="js/jquery-3.4.1.min.js"> </script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="registration/js/script.js"></script>

</body>

</html>