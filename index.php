<?php
session_start();
include('includes/connect.php');
include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Fish market</title>

  <!-- bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
  <!-- css file -->
  <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- navbar  -->
    <div class="container-fluid p-0"> 
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/logo.avif" alt="" class="logo">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="users_area/user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item();  ?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price :<?php total_cart_price();?> /-</a>
        </li>
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>

<!-- calling cart function -->
<?php
cart();
?>

<!-- second child -->

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    
      <?php 
          if(isset($_SESSION['user_logged'])){
      ?>
      <li class="nav-item"></li>
          <a class="nav-link" href="#">Welcome <?php echo $_SESSION['logged_user_name']; ?></a>
          </li>
          <li class="nav-item"></li>
          <a class="nav-link" href="user_logout.php">Logout?</a>
          </li>
      <?php 
          }else{
            echo "<a class='nav-link' href='#'>Welcome Guest</a><li class='nav-item'>
            <a class='nav-link' href='./users_area/user_login.php'>Login</a>
          </li>";
          }
      ?>
    </ul>
</nav>

<!-- third child -->
<div class="bg-light">
    <h3 class="text-center">Online Fish Market</h3>
    <p class="text-center">Communication is at the Heart of E-Commerce</p>

</div>


<!-- Fourth child -->

<div class="row px-1 ">
    <div class="col-md-10">
        <!-- products -->
        <div class="row">
          <!-- Fatching the products -->
          <?php
             // calling common function
             getproducts();
             get_unique_categories();
             get_unique_brands();

            //  $ip = getIPAddress();  
            //  echo 'User Real IP Address - '.$ip;  
           ?>
            <!-- row end -->

        </div>
        <!-- col end -->
    </div>
    <div class="col-md-2 bg-secondary p-0">
        <!-- Brands to be displayed -->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
               <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a> 
            </li>

            <?php
           getbrands();
            ?>



        </ul>

        <!-- Categories to displayed -->

        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
               <a href="#" class="nav-link text-light"><h4>Categories</h4></a> 
            </li>
           
            <?php
           getcategories();
            ?>
        </ul>
       
    </div>

</div>


    <!-- last child -->
    <!-- footer -->
    <?php  include ("./includes/footer.php") ?>


    </div>


<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>