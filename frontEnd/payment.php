<?php
include '../backEnd/handle-google-login.php';
//
session_start();

// check if user has looged in?

if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true ){

    header("location:index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipa na mpesa</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <link href="../assets/img/projectimages/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"> </script>
    <script src="../js/jquery.min.js"> </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/dashstyle.css">
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="" rel="stylesheet" />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" ">
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    ></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap");

      body {
        background-color: #eaedf4;
        font-family: "Rubik", sans-serif;
      }

      .card {
        width: 310px;
        border: none;
        border-radius: 15px;
      }

      .justify-content-around div {
        border: none;
        border-radius: 20px;
        background: #f3f4f6;
        padding: 5px 20px 5px;
        color: #8d9297;
      }

      .justify-content-around span {
        font-size: 12px;
      }

      .justify-content-around div:hover {
        background: #545ebd;
        color: #fff;
        cursor: pointer;
      }

      .justify-content-around div:nth-child(1) {
        background: #545ebd;
        color: #fff;
      }

      span.mt-0 {
        color: #8d9297;
        font-size: 12px;
      }

      h6 {
        font-size: 15px;
      }
      .mpesa {
        background-color: green !important;
      }

      img {
        border-radius: 15px;
      }
    </style>
  </head>

  <body oncontextmenu="return false" class="snippet-body ">
  <header id="header" class="d-flex align-items-center" id="home">
      <div class="container d-flex align-items-center">

          <div id="logo" class="me-auto">
              <a href="index.php"><img src="../assets/img/Artboard%203.png" alt="victor logo"></a>
          </div>

          <nav id="navbar" class="navbar order-last order-lg-0">
              <ul>
                  <li><a class="nav-link scrollto active" href="index.php#home">Home</a></li>
                  <li><a class="nav-link scrollto" href="index.php#about">About us</a></li>
                  <li><a class="nav-link scrollto" href="index.php#features">Features</a></li>
                  <li><a class="nav-link scrollto" href="index.php#portfolio">Portfolio</a></li>
                  <li><a class="nav-link scrollto" href="schedule.php">Schedules</a></li>
                  <li><a class="nav-link scrollto " href="book.php">Book now</a></li>
                  <li><a class="nav-link scrollto" href="index.php#team">Team</a></li>
                  <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>

          <div class="header-social-links d-flex align-items-center">
              <a href="https://twitter.com/victor_azangu" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://web.facebook.com/victorshem.azangu.3" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/v.azangu/" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/in/victor-shem-7a13821a3/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
          </div>
          <div class="m-2">
              <button class="btn btn-outline-dark float-end" style="background-color:#b99c6f "><a href="../frontEnd/userdashboard.php" class="text-white float-end">My Account</a></button>
          </div>
      </div>
  </header>

  <div class="row m-3 p-3 text-center" >
      <div class="col-lg-3 m-3 p-3">
          <img src="../assets/img/projectimages/bus3.png" alt="" height="500" >
      </div>
      <div class="col-lg-3 m-3 p-3">
          <div class="container d-flex justify-content-center">
              <div class="card mt-5 px-3 py-4">
                  <div class="d-flex flex-row justify-content-around">
                      <div class="mpesa"><span>Mpesa </span></div>
                      <div><span>Paypal</span></div>
                      <div><span>Credit Card</span></div>
                  </div>
                  <div class="media mt-4 pl-2">
                      <img src="../assets/img/projectimages/1200px-M-PESA_LOGO-01.svg.png" class="mr-3" height="75" />
                      <div class="media-body">
                          <h6 class="mt-2">Enter Amount & Number</h6>
                      </div>
                  </div>
                  <div class="media mt-3 pl-2">
                      <!--bs5 input-->

                      <form class="row g-3" action="../backEnd/stk_initiate.php" method="POST">

                          <div class="col-12">
                              <label for="inputAddress" class="form-label">Amount</label>
                              <input type="text" class="form-control" name="amount" placeholder="Enter Amount">
                          </div>
                          <div class="col-12">
                              <label for="inputAddress2" class="form-label" >Phone Number</label>
                              <input type="text" class="form-control" name="phone"  placeholder="Enter Phone Number">
                          </div>

                          <div class="col-12">
                              <button type="submit" class="btn btn-success" name="submit" value="submit">Pay here</button>
                          </div>
                      </form>
                      <!--bs5 input-->
                  </div>
              </div>
          </div>
      </div>
      <div class="col-lg-5 m-3 p-3">
          <div class=" mt-5 "><?php echo "<img style='border-radius:50% ' src='".$_SESSION['picture']."'>"; ?></div>
          <div class=" mt-2 "><span CLASS="h4 text-white"><?php echo $_SESSION['firstname']?> </span><br></div>
          <div class=" mt-2 "><span CLASS="h4 "><?php echo $_SESSION['email'];;?> </span></div>
      </div>

  <div class="row">
      <div class="col">
          <section class="about" id="about">

              <div class="container text-center">
                  <h2>
                      About Victor Azangu Shemi Travel Agency
                  </h2>
                  <p class="small">
                      Victor Azangu Shemi is a travel booking agency that operates in kenya and has terminas in about every major
                      city in Kenya,
                      it helps you book your ticket and plan your journey in advanceto avoid confusionat the booking office and long
                      standing hours
                      at the booking officewaiting others to be served.it also helps you to be sure if there is available car and
                      what time is the
                      departure
                  </p>
                  <div class="row stats-row">
                      <div class="stats-col text-center col-md-3 col-sm-6">
                          <div class="circle">
              <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1"
                    class="purecounter stats-no"></span>
                              Satisfied Customers
                          </div>
                      </div>

                      <div class="stats-col text-center col-md-3 col-sm-6">
                          <div class="circle">
              <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1"
                    class="purecounter stats-no"></span>
                              terminas country wide
                          </div>
                      </div>

                      <div class="stats-col text-center col-md-3 col-sm-6">
                          <div class="circle">
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                    class="purecounter stats-no"></span>
                              Hours Of Support
                          </div>
                      </div>

                      <div class="stats-col text-center col-md-3 col-sm-6">
                          <div class="circle">
              <span data-purecounter-start="0" data-purecounter-end="68" data-purecounter-duration="1"
                    class="purecounter stats-no"></span>
                              Hard Workers
                          </div>
                      </div>
                  </div>
              </div>

          </section>

      </div>
  </div>
  <footer class="site-footer ">
      <div class="bottom">
          <div class="container">
              <div class="row">

                  <div class="col-lg-6 col-xs-12 text-lg-start text-center">
                      <p class="copyright-text small">
                          &copy: Copyright <strong>Victor Azangu</strong>. All Rights Reserved
                      </p>

                  </div>

                  <div class="col-lg-6 col-xs-12 text-lg-right text-center">
                      <ul class="list-inline">
                          <li class="list-inline-item">
                              <a href="index.php">Home</a>
                          </li>

                          <li class="list-inline-item">
                              <a href="#about">About Us</a>
                          </li>

                          <li class="list-inline-item">
                              <a href="#features">Features</a>
                          </li>

                          <li class="list-inline-item">
                              <a href="#portfolio">Portfolio</a>
                          </li>

                          <li class="list-inline-item">
                              <a href="#team">Team</a>
                          </li>

                          <li class="list-inline-item">
                              <a href="#contact">Contact</a>
                          </li>
                      </ul>
                  </div>

              </div>
          </div>
      </div>
  </footer>

    <script
      type="text/javascript"
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
    ></script>
    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src=""></script>
    <script type="text/Javascript"></script>
  </body>

<script src="../assets/vendor/purecounter/purecounter.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../assets/js/main.js"></script>
</html>
