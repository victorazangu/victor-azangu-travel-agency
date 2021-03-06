<?php
include "../backEnd/handle-google-login.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>REGISTER</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"> </script>
    <script src="../js/jquery.min.js"> </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/dashstyle.css">

</head>

<body class="m-5" id="body" style="background-color:#199EB8 ">

    <div class="container p-4" style="background-color:#199EB8;border-radius: 10px;">
        <div class="card" style="background-color:#ddd;border-radius: 10px;">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="../assets/img/projectimages/bus3.png" height="450" width="450px">
                    </div>
                    <div class="col-lg-7">
                        <div class="text-center">
                            <h4 class="grey">Create an Account</h4>
                        </div>
                        <form action="../backEnd/handleRegistration.php" method="post">
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control rounded-pill" name="firstName"
                                        placeholder="First Name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control rounded-pill" name="secondName"
                                        placeholder="Second Name" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <input type="text" class="form-control rounded-pill" name="emailAddress"
                                    placeholder="Email Address" required>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <input type="password" class="form-control rounded-pill" name="password"
                                        placeholder="Password" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control rounded-pill" name="confirmPass"
                                        placeholder="Confirm Password" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <input type="submit" class="rounded-pill btn btn-success" name="register"
                                    value="Register">
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <button onclick="window.location='<?php echo $login_url;?>'" type="button" class="rounded-pill btn btn-primary"><i class="fa fa-google-plus-official"></i> Login
                                    with Google</button>
                            </div>
                        </form>
                        <div class="text-center">
                            <a href="" class="small">Forgot password</a>
                        </div>
                        <div class="text-center">
                            <a href="login.php" class="small">Already have an account? Login</a>
                        </div>
                    </div>
                </div>
                <div class="row " style="background-color:#199EB8 ">
                    <div class="col ">
                        <img src="../assets/img/projectimages/LOGO1.png" alt="logp" height="350" width="350">
                    </div>
                    <div class="col">
                        <img src="../assets/img/projectimages/LOGO1.png" alt="logp" height="350" width="350">
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>