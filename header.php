<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="Css_F/css/bootstrap.min.css">
<!-- google font link -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Palette+Mosaic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Poppins:wght@300&display=swap" rel="stylesheet">
<!-- font awesome link -->
<script src="https://kit.fontawesome.com/62f5df6ae3.js" crossorigin="anonymous"></script>
<!-- css link -->
<link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>

  <!-- header -->
<div class="bc">
  <nav class="navbar navbar-expand-lg">
    <!-- <div class="container"> -->
      
      <a class="navbar-brand" href="index.php">Vege</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0">

            <li class="nav-item"> 
              <a class="nav-link active"  href="index.php">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link">product</a>
              <ul class="dropdown-content">
                <li><a href="vegetable.php">Vegetables</a></li>
                <li><a href="fruit.php">Fruits</a></li>
              </ul>
            </li>

            <li class="nav-item ">
              <a class="nav-link " href="about.php" >about</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="contact.php">contact</a>
            </li>

            <li class="nav-item dropdown">
                <?php
                   session_start();
                  if(isset($_SESSION['name'])){
                    ?>
                    <a class="nav-link">
                      <?php
                    echo $_SESSION['name'];
                    ?>
                    </a>
                <ul class="dropdown-content">
                  <li><a href="logout.php">logout</a></li>
                </ul>
              <?php
                }else{
              ?>
              <a class="nav-link" href="login.php">login</a>
                
              <?php
                }
              ?>
            </li>

            <li class="nav-item">
              <?php
                $count=0;
                if(isset($_SESSION['cart']))
                {
                  $count=count($_SESSION['cart']);
                }
              ?>
              <a class="nav-link " href="cart.php"><i class="fa-solid fa-cart-shopping fa-1x">(<?php echo $count; ?>)</i></a>
            </li>
          </ul>
      
          <form class="d-flex">
            <input class="px-2 search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn0" type="submit">Search</button>
          </form>
        </div>
      <!-- </div> -->
  </nav>
</div>

</body>
</html>

