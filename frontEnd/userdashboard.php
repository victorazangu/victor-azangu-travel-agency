<?php
include "../backEnd/config.php";
include '../backEnd/handle-google-login.php';
session_start();
// check if user has looged in?

if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true ){

    header("location:../frontEnd/index.php");
    exit();
}



if (isset($_GET["id"]) and !empty($_GET["id"])) {

//$id = $_GET["id"];

$sql = "SELECT `nameMessage`, `emailMessage`, `subjectMessage`, `message` FROM `messages` WHERE id=$id";

$result = mysqli_query($link, $sql);

if ($result) {

$data = mysqli_num_rows($result);

if ($data == 1) {

$row = mysqli_fetch_array($result);

$nameMessage = $row['nameMessage'];
$emailMessage = $row['emailMessage'];
$subjectMessage= $row['subjectMessage'];
$message = $row['message'];



$_SESSION['firstname'];
$_SESSION['lastname'];
$_SESSION['email'];


} else {
    echo "No record was found";
}


} else {
    echo "error executing query $sql" . mysqli_error($link);
}


} else {
    echo "id value not picked";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>user dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body class="">
<header id="header" class="d-flex align-items-center m-0">
    <div class="container d-flex align-items-center">

        <div id="logo" class="me-auto">
            <a href="index.php"><img src="../assets/img/projectimages/Artboard%203.png" alt="victor logo"></a>
            <!-- Uncomment below if you prefer to use a text image -->
            <!--<h1><a href="#hero">Bell</a></h1>-->
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="index.php#home">Home</a></li>
                <li><a class="nav-link scrollto" href="index.php#about">About us</a></li>
                <li><a class="nav-link scrollto" href="index.php#features">Features</a></li>
                <li><a class="nav-link scrollto" href="index.php#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="book.php">Schedules</a></li>
                <li><a class="nav-link scrollto " href="payment.php">Book now</a></li>
                <li><a class="nav-link scrollto" href="index.php#team">Team</a></li>
                <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

        <div class="header-social-links d-flex align-items-center">
            <a href="https://twitter.com/victor_azangu" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://web.facebook.com/victorshem.azangu.3" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/v.azangu/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/victor-shem-7a13821a3/" class="linkedin"><i
                        class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</header>
<hr style="background-color:#199EB8 " >
<div class="container-fluid">
    <div class="row ">
        <div class="col-3 p-2 mt-0" style="background-color:#199EB8 ">

            <ul class="nav flex-column">
                <li class="nav-item stylenav">
                    <a class="nav-link active text-white" aria-current="page" href="">
                        <i class="fa fa-user-circle-o fa-2x"></i>
                        <span CLASS="h4 text-white"><?php echo $_SESSION['firstname']?> </span><br>
                        <span CLASS="h4 "><?php echo $_SESSION['email'];?> </span>
                    </a>
                </li>
                <hr>
                <li class="nav-item stylenav">
                    <a class="nav-link" href="index.php">
                        <i class="fa fa-home fa-lg text-white"></i>
                        <span class="text-white">HOME</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item stylenav">
                    <a class="nav-link" href="#">
                        <i class="fa fa-bus fa-lg text-white"></i>
                        <span class="text-white">Buses available</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item stylenav">
                    <a class="nav-link" href="#">
                        <i class="fa fa-wrench fa-lg text-white"></i>
                        <span class="text-white">History</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item stylenav">
                    <a class="nav-link" href="#">
                        <i class="fa fa-desktop fa-lg text-white"></i>
                        <span class="text-white">Customer Care</span>
                    </a>
                </li>
                <hr>  <li class="nav-item stylenav">
                    <a class="nav-link" href="#">
                        <i class="fa fa-graduation-cap fa-lg text-white"></i>
                        <span class="text-white">Careers</span>
                    </a>
                </li>
                <hr>

                <li class="nav-item stylenav">
                    <a class="nav-link" href="resetPassword.php">
                        <i class="fa fa-wrench fa-lg text-white"></i>
                        <span class="text-white">Reset password</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item stylenav">
                    <a class="nav-link" href="../backEnd/logout.php">
                        <i class="fa fa-signout fa-lg text-white"></i>
                        <button class="btn btn-outline-dark"><span class="text-white">Log out</span></button>
                    </a>
                </li>
            </ul>

        </div>

        <div class="col-9 bg-light">
            <div class="row bg-white p-2">
                <div class="col-7">
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <form class="d-flex">
                                <input class="col-8 form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>
                <div class="col-5">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-bell fa-lg"></i>
                                            <span class="badge bg-danger rounded-circle">3</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-envelope fa-lg"></i>
                                            <sup><span class="badge bg-danger rounded-circle">9</span></sup>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <span CLASS="h4 "><?php echo $_SESSION['firstname'];echo "  ";echo $_SESSION['lastname'];?> </span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link float-end" href="#">
                                            <?php echo "<img style='border-radius:50% ' src='".$_SESSION['picture']."'>"; ?>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <hr>
            <div class="row p-2 m-2 ">
                <div class="col-6">
                    <p class="h3 mb-2 grey">USER</p>
                </div>
                <div class="col-6 " >
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add a passenger
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                        <div class="modal-dialog" >
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add a passenger</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <button class="btn btn-outline-dark"><a href="payment.php" class="text-white">Pay for a passenger</a></button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row m-2 p-2">
                <div class="col text-center">
                    <div class="card border-left-primary">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div>AVERAGE MONTHLY TRIPS:</div>
                                    <div>6</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-calendar-0 fx-2x grey "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="card border-left-primary">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div>AVERAGE YEARLY TRIPS:</div>
                                    <div>26</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-calendar-0 fx-2x grey "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row m-2">
                <div class="col-6">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7" aria-label="Slide 8"></button>

                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2000">
                                <img src="../assets/img/projectimages/porf-8.jpg" class="d-block w-100"  style="height: 500px"alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color:#000000;">Malindi</h5>
                                    <p style="color:#000000;" > Tropical beaches dotted with hotels and resorts.</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="../assets/img/projectimages/porf-7.jpg" class="d-block w-100" style="height: 500px" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color:#ffffff;" >Thika</h5>
                                    <p style="color:#ffffff;">Magical and breathtaking Fourteen Falls.</p>
                                </div>
                            </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="../assets/img/projectimages/porf-6.jpg" class="d-block w-100" style="height: 500px" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color:#000000;">Eldoret</h5>
                                    <p style="color:#000000;">And see the beauty of rift valley</p>
                                </div>
                            </div>
                          <div class="carousel-item" data-bs-interval="2000">
                            <img src="../assets/img/projectimages/porf-6.jpg" class="d-block w-100" style="height: 500px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style="color:#000000;">Eldoret</h5>
                                <p style="color:#000000;">And see the beauty of rift valley</p>
                            </div>
                          </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="../assets/img/projectimages/porf-5.jpg" class="d-block w-100" style="height: 500px" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Nyahururu</h5>
                                    <p>The best waterfalls and best sceneries</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="../assets/img/projectimages/porf-4.jpg" class="d-block w-100" style="height: 500px" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Nakuru</h5>
                                    <p>And be able to see beatiful flamingos and the beauty of Nakuru</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="../assets/img/projectimages/porf-1.jpg" class="d-block w-100" style="height: 500px" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Mombasa</h5>
                                    <p>Travel to see the best sceneries of indian ocean</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="../assets/img/projectimages/porf-2.jpg" class="d-block w-100" style="height: 500px" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Kisumu</h5>
                                    <p> Travel to see Lake Victoria and other sceneries</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="../assets/img/projectimages/porf-3.webp" class="d-block w-100" style="height: 500px" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Nairobi</h5>
                                    <p> Access to the capital of kenya with ease and comfortable</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                <div class="col-6">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    message 1
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                  <div class="row">
                                      <div class="col-8"></div>
                                      <div class="col-4"><button class="btn btn-outline-dark float-end">delete</button></div>
                                  </div>
                                  <div class="row">
                                      message body
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    message 2
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-8"></div>
                                            <div class="col-4"><button class="btn btn-outline-dark float-end">delete</button></div>
                                        </div>
                                        <div class="row">
                                            message body
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    message 3
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-8"></div>
                                            <div class="col-4"><button class="btn btn-outline-dark float-end">delete</button></div>
                                        </div>
                                        <div class="row">
                                            message body
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapsefour">
                                    message 4
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-8"></div>
                                            <div class="col-4"><button class="btn btn-outline-dark float-end">delete</button></div>
                                        </div>
                                        <div class="row">
                                            message body
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-headingFive" aria-expanded="false" aria-controls="flush-headingFive">
                                    message 5
                                </button>
                            </h2>
                            <div id="flush-headingFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-8"></div>
                                            <div class="col-4"><button class="btn btn-outline-dark float-end">delete</button></div>
                                        </div>
                                        <div class="row">
                                            message body
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-headingSix" aria-expanded="false" aria-controls="flush-headingSix">
                                    message 6
                                </button>
                            </h2>
                            <div id="flush-headingSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-8"></div>
                                            <div class="col-4"><button class="btn btn-outline-dark float-end">delete</button></div>
                                        </div>
                                        <div class="row">
                                            message body
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-headingSeven" aria-expanded="false" aria-controls="flush-headingSeven">
                                    message 7
                                </button>
                            </h2>
                            <div id="flush-headingSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-8"></div>
                                            <div class="col-4"><button class="btn btn-outline-dark float-end">delete</button></div>
                                        </div>
                                        <div class="row">
                                            message body
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                <div class="text-center">
                    <small class="grey">&copy victor azangu shemi travels 2022</small>
                </div>
            </footer>
        </div>

    </div>
</div>

</body>
<script src="../assets/vendor/purecounter/purecounter.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
</html>
