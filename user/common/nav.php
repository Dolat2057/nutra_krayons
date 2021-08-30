<?php include("../connection/conn.php");
include("../connection/session.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="stylesheet" href="<?= URL ?>assests/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= URL ?>assests/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= URL ?>assests/css/common.css">
  <link rel="stylesheet" href="<?= URL ?>assests/css/extra.css">
  <link rel="stylesheet" href="<?= URL ?>assests/css/footer.css">
  <link rel="stylesheet" href="<?= URL ?>assests/css/aside.css">
  <link rel="stylesheet" href="<?= URL ?>assests/css/search-page.css">
  <link rel="stylesheet" href="<?= URL ?>assests/css/product-detail.css">
  <link rel="stylesheet" href="<?= URL ?>assests/owl-carousel-2.3.4/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= URL ?>assests/owl-carousel-2.3.4/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= URL ?>assests/css/search-page.css">
  <link rel="stylesheet" href="<?= URL ?>assests/css/page-not-found.css">
  <link rel="stylesheet" href="<?= URL ?>assests/css/common-1.css">
  <link rel="stylesheet" href="<?= URL ?>assests/css/important-product-detail.css">
  <link rel="stylesheet" href="<?= URL ?>assests/css/owl-product-slider.css">
  <link rel="stylesheet" href="<?= URL ?>assests/css/services-style.css">
  <link rel="stylesheet" href="<?= URL ?>assests/css/last-css.css">
  <link rel="icon" type="image/png" href="../assests/images/favicon.png" sizes="32x32" />


  <style>
    @media only screen and (min-width: 767px) {
      .navbar-brand {
        padding-left: 45px !important;
      }

      .social {
        padding-right: 44px !important;
      }

    }

    body::-webkit-scrollbar {
      width: 13px;
      /* width of the entire scrollbar */
    }

    body::-webkit-scrollbar-track {
      background: #f8f8f8;
      /* color of the tracking area */
    }

    body::-webkit-scrollbar-thumb {
      background-color: #73ae20;
      /* color of the scroll thumb */
      border-radius: 20px;
    }

    body::-webkit-scrollbar-thumb:hover {
      background-color: #3e9fbe;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-dark bg-dark" style="background-color:black !important; width:100%;">
    <div class="col-md-9">
      <a class="navbar-text" id="topnav1" style="  color: white !important;
    font-size:14px !important;
    font-family: 'oswald','sans-serif'; " href="<?= URL ?>">Ordered before 17:30, shipped today – Support: +91 – 9131371966</a>
    </div>
    <div class="col-md-3">

    </div>

  </nav>
  <nav id="top" class="navbar navbar-expand-md navbar-light bg-white d-flex sticky-top" style="background-color: #f8f8f8 !important;">
    <a href="<?=URL?>index.php" class="navbar-brand"><img src="<?= URL ?>assests/images/logo1.png" style="height:52px;width:100px" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <i id="icon" class="h3 fa fa-bars"></i>
      </span>

    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="<?= URL ?>">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            PRODUCT
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?= URL ?>products.php?product_type=Haircare">HAIR CARE</a>
            <a class="dropdown-item" href="<?= URL ?>products.php?product_type=Weightloss">WEIGHT LOSS</a>
            <a class="dropdown-item" href="<?= URL ?>products.php?product_type=Womenwellness">WOMEN WELLNESS</a>
            <a class="dropdown-item" href="<?= URL ?>products.php?product_type=Sexualwellness">SEXUAL WELLNESS</a>
            <a class="dropdown-item" href="<?= URL ?>products.php?product_type=Immunitybooster">IMMUNITY BOOSTER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL ?>about-us.php">ABOUT</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= URL ?>faq.php">FAQS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL ?>contact-us.php">CONTACT</a>
        </li>
      </ul>
    </div>

    <div class="social h4 pr-5">
      <?php if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
      ?>
        <a href="./user/login.php" class="dropdown-toggle " type="button" data-toggle="dropdown">
          <i class="fa fa-user"></i>
          <?php

          $email = $_SESSION['email'];

          $sql = "SELECT * FROM  users_registration where email='$email'";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
          }
          ?>
          <?php echo  $row['first_name']; ?>
        </a>

        <div class="dropdown-menu" style="left: auto !important; line-height:normal !important;">
          <a class="dropdown-item" href="<?= URL ?>user/user.php">
            <i class="fa fa-home" style="margin-right:12px !important"></i>Your Account
          </a>

          <a class="dropdown-item" href="<?= URL ?>user/logout.php">
            <i class="fa fa-sign-out" style="margin-right:12px !important"></i>Logout
          </a>
        </div>
      <?php } else { ?>


        <a href="<?= URL ?>user/login.php" style="font-size:17px" class="login-slash">Login</a><span style="color: #73AE20;" class="slash">/<a href="<?= URL ?>user/registration.php" class="reg-slash" style="font-size:17px">Register</a></span>


      <?php } ?>




      <a href="#" class="px-2" onclick="openSearch()">
        <i class="fa fa-search" style="color:#000;"></i>
      </a>

      </a>
      <?php
      $count = 0;
      if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
      }
      ?>

      <a href="#" onclick="openNav()" style="color:#000"><i class="fa fa-shopping-cart" style="color:#000;"></i><?php echo $count; ?></a>
    </div>

    </div>
    <!-- add to cart aside -->
    <div id="mySidenav" class="sidenav">
      <?php
      $count = 0;
      if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
      }
      ?>

      <a href="#" onclick="openNav()" style="color:#000"><i class="fa fa-shopping-cart" style="color:#000;"></i> MY CART ( <?php echo $count; ?>)</a>
      <a href="" class="closebtn" onclick="closeNav()">&times;</a>
      <br>
      <table class="table table-white  table-responsive">
        <thead>

        </thead>
        <tbody>
          <?php

          if (isset($_SESSION['cart'])) {

            foreach ($_SESSION['cart'] as $key => $value) {

              echo "
                                    <tr>
                                    <td><img src='".URL."$value[Item_Image]'style='width:60px;height:60px;'/></td>
                                <td>$value[Item_Name]
                                <br>
                                <span style='font-weight:bold'>
                                <input type='hidden' class='iprice'  value='$value[Price]'>
                                </span>
                      
                                </td>
                            
                      
                                <td style='display:none !important;'><input type='number' class='text-center iquantity' onchange='subTotal()'  min='1' max='10' value='$value[Quantity]'></td>
                                <td class='itotal'></td>
                             
                                    </tr>
                                   
                                   
                                    ";
            }
          }

          ?>

        </tbody>

        </tbody>

      </table>
      <div class="">

        <div class="col-lg-12 text-center border rounded-bg-light">
          <h2>Grand Total:<br><span id="gtotal">ERROR</span></h2>
          <?php if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
          ?>

            <?php

            $email = $_SESSION['email'];

            $sql = "SELECT * FROM  users_registration where email='$email'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {

              $row = mysqli_fetch_assoc($result);
            }
            ?>

            </a>
            <h1><a href="<?= URL ?>paytm-check/checkout.php"><button class="btn btn-danger btn-block">checkout</button></a></h1>
            <a href="<?= URL ?>">
              <h2> <i class="fa fa-chevron-left"></i> Continue to shopping</h2>
            <?php } else { ?>
              <h1><a href="<?= URL ?>user/login.php"><button class="btn btn-danger btn-block">Login first</button></a></h1>
              <h2> <i class="fa fa-chevron-left"></i> Continue to shopping</h2>
            </a>
          <?php } ?>
        </div>
      </div>
    </div>



    <!-- search -->
    <div id="mySearch" class="search">
      <a href="#" class="closebtn" onclick="closeSearch()">&times;</a>
      <div class="search-container" style="text-align:center">
        <form action="<? URL ?>search.php" method="POST">
          <input type="text" class="search-placeholder" style="width: 85% !important;" placeholder="Search.." name="search">
          <button type="submit" class="search-submit" name="search-submit">Search <i class="fa fa-chevron-right"></i></button>
        </form>

      </div>
      <div>
        <br><br>
        <h1 style="font-weight: bold; font-size:25px !important;margin-left: 50px;">Popular Searches</h1>

        <div class="neuromorphism-btn">

          <button class="neuro-btn1 mt-3">Hair Care</button>
          <button class="neuro-btn2 mt-3">Weight Loss</button>
          <button class="neuro-btn3 mt-3">Women Wellness</button>
          <button class="neuro-btn4 mt-3">Sexual Wellness</button>
          <button class="neuro-btn5 mt-3">Immunity Booster</button>
        </div>
      </div>
  </nav>
  <script>
    // quantity increases price increases js 

    var gt = 0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');


    function subTotal() {
      gt = 0;
      for (i = 0; i < iprice.length; i++) {
        itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
        gt = gt + (iprice[i].value) * (iquantity[i].value);

      }
      gtotal.innerText = gt;


    }
    subTotal();
  </script>