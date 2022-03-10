<?php
include "../backEnd/config.php";
include '../backEnd/handle-google-login.php';
session_start();
//check if user has looged in?

if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true ){

    header("location:../frontEnd/index.php");
    exit();
}
$sql = "SELECT * FROM `messages` ";
#execute query
$result = mysqli_query($link, $sql);

#check
if ($result) {
    $data = mysqli_num_rows($result);
    #is there data here?
    if ($data > 0) {


        while ($row = mysqli_fetch_array($result)) {
              $nameMessage = $row['nameMessage'];
              $emailMessage = $row['emailMessage'];
              $subjectMessage= $row['subjectMessage'];
              $message = $row['message'];

              $data++;
        }

    } else {
        echo "no records were found in your database!";
    }

} else {
    echo "Error executing query $sql" . mysqli_error($link);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
<hr style="background-color:#199EB8 ">
<div class="container-fluid mt-0">
    <div class="row">
        <div class="col-3 " style="background-color:#199EB8 ">

            <ul class="nav flex-column">
                <li class="nav-item stylenav">
                    <a class="nav-link active text-white" aria-current="page" href="#">
                        <i class="fa fa-user-circle-o fa-2x"></i>
                        <span CLASS="h4 "><?php echo $_SESSION['firstname']; ?> </span><br>
                        <span CLASS="h4 "><?php echo $_SESSION['email'];; ?> </span>

                    </a>
                </li>
                <hr>
                <li class="nav-item stylenav">
                    <a class="nav-link" href="#">
                        <i class="fa fa-home fa-lg text-white"></i>
                        <span class="text-white">HOME</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item stylenav">
                    <a class="nav-link" href="#">
                        <i class="fa fa-users fa-lg text-white"></i>
                        <span class="text-white">Users</span>
                    </a>
                </li>
                <hr>

                <li class="nav-item stylenav">
                    <a class="nav-link" href="#">
                        <i class="fa fa-bus fa-lg text-white"></i>
                        <span class="text-white">Buses</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item stylenav">
                    <a class="nav-link" href="#">
                        <i class="fa fa-file fa-lg text-white"></i>
                        <span class="text-white">Documents</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item stylenav">
                    <a class="nav-link" href="#">
                        <i class="fa fa-desktop fa-lg text-white"></i>
                        <span class="text-white">Customer Care</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item stylenav">
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
                <div class="col-8">
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <form class="d-flex">
                                <input class="col-8 form-control me-2" type="search" placeholder="Search"
                                       aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>
                <div class="col-4">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-bell  fa-3x"></i>
                                            <sup><span class="badge bg-danger rounded-circle">3</span></sup>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-envelope  fa-3x"></i>
                                            <sup><span class="badge bg-danger rounded-circle">9</span></sup>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <span CLASS="h4 "><?php echo $_SESSION['firstname'];
                                                echo "  ";
                                                echo $_SESSION['lastname']; ?> </span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link float-end" href="#">
                                            <?php echo "<img style='border-radius:50% ' src='" . $_SESSION['picture'] . "'>"; ?>
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
                <div class="col-4">
                    <p class="h3 mb-2 grey">ADMIN</p>
                </div>
                <div class="col-8 ">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                        Book for customer
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <button class="btn btn-outline-dark"><a href="payment.php" class="text-white">book
                                            for customer</a></button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row m-2 p-2">
                <div class="col ">
                    <div class="card border-left-primary">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div>AVERAGE MONTHLY TRIPS</div>
                                    <div>256</div>
                                </div>
                                <div class="col">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                             aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-line-chart fx-2x grey "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-left-success">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div>AVAILABLE BUSES</div>
                                    <div>15 BUSES</div>
                                </div>
                                <div class="col">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                             aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <i class="fa fa-reorder fx-2x grey " ></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card border-left-warning">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div>WORKING BUSES</div>
                                    <div>15 BUSES</div>
                                </div>
                                <div class="col">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                             aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-reorder fx-2x grey "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row m-2">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-primary bg-white">Messages</div>
                        <div class="card-body">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                            <?php echo "Name:".$nameMessage; ?>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                         aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo "Subject:".$subjectMessage."<br>"; ?>
                                            <?php echo "Email:".$emailMessage."<br>"; ?>
                                            <?php echo "Message:".$message."<br>"; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                            <?php echo "Name:".$nameMessage; ?>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                         aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo "Subject:".$subjectMessage."<br>"; ?>
                                            <?php echo "Email:".$emailMessage."<br>"; ?>
                                            <?php echo "Message:".$message."<br>"; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                            <?php echo "Name:".$nameMessage; ?>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                         aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo "Subject:".$subjectMessage."<br>"; ?>
                                            <?php echo "Email:".$emailMessage."<br>"; ?>
                                            <?php echo "Message:".$message."<br>"; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-2" id="projects">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-primary bg-white">Successfully trips per week</div>
                        <div class="card-body">
                            <div class="m-2 p-2">
                                <span class="grey bg-white">Nairobi to Eldoret</span>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 65%"
                                         aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65
                                    </div>
                                </div>
                            </div>
                            <div class="m-2 p-2">
                                <span class="grey bg-white">Nairobi to Nakuru</span>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 75%"
                                         aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">75
                                    </div>
                                </div>
                            </div>
                            <div class="m-2 p-2">
                                <span class="grey bg-white">Nairobi to Thika</span>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 68%"
                                         aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">68
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 m-2">
                                <span class="grey bg-white">Nairobi to Mombasa</span>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                         aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 m-2">
                                <span class="grey bg-white">Nairobi to Kisumu</span>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 75%"
                                         aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75
                                    </div>
                                </div>
                            </div>
                            <div class="m-2 p-2">
                                <span class="grey bg-white">Nairobi to Malindi</span>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 90%"
                                         aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

            </div>
            <footer class="position-sticky p-2 bg-white">
                <div class="text-center">

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