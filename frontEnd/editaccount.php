<?php


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
    <title>edit account</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body class="m-2 ">
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div id="logo" class="me-auto">
            <a href="index.php"><img src="../assets/img/Artboard%203.png" alt="victor logo"></a>
            <!-- Uncomment below if you prefer to use a text image -->
            <!--<h1><a href="#hero">Bell</a></h1>-->
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
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
            <a href="https://www.linkedin.com/in/victor-shem-7a13821a3/" class="linkedin"><i
                        class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</header>
<form action="" method="post" class="">
    <div class="m-2 p-3">
        <div>
            <div class="bg-secondary mb-2" style="height: 200px;width: 200px;border-radius: 10px;" name="photoDiv">

            </div>
            <p><label>upload an image</label></p>
            <p><input class="mt-2" type="file" name="photo" placeholder="profile image"></p>
        </div>
        <div>
            <label>Full Name</label>
            <input class="form-control" type="text" name="fullName">
        </div>
        <div>
            <label>Email Address</label>
            <input class="form-control" type="email" name="emailAddress">
        </div>
        <div>
            <label>Phone Number </label>
            <input class="form-control" type="tel" name="phoneNumber">
        </div>
        <div>
            <label>Address Location</label>
            <input class="form-control" type="text" name="addressLocation">
        </div>
        <div>
            <label>Gender</label>
            <div>
                <input class="form-check-input" type="radio" name="gender" value="male">
                <label>Male</label>
            </div>
            <div>
                <input class="form-check-input" type="radio" name="gender" value="female">
                <label>Female</label>
            </div>
            <div>
                <input class="form-check-input" type="radio" name="gender">
                <label>others</label>
            </div>
        </div>
        <div>
            <label>Date of Birth</label>
            <input class="" type="date" name="DOB">
        </div>
        <div class="text-center">
            <input class="btn bg-danger mt-2" type="reset" name="resetChanges" value="Reset Changes">
        </div>
        <div class="text-center">
            <input class="btn bg-success mt-2" type="submit" name="saveChanges" value="Save Changes">
        </div>

    </div>
</form>

</body>
<script src="../assets/vendor/purecounter/purecounter.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
</html>
