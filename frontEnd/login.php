<?php
include "../backEnd/handle-google-login.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"> </script>
    <script src="../js/jquery.min.js"> </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/dashstyle.css">

</head>

<body class="bg-primary m-5 ">
    <div class="container p-4 " style="background-color:#199EB8;border-radius: 10px;">
        <div class="card" style="background-color:#b99c6f;border-radius: 10px;">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="">
                            <img src="../assets/img/projectimages/bus3.png" height="450" width="450px">
                        </div>

                    </div>
                    <div class="col-lg-7">
                        <div class="text-center">
                            <h4 class="grey">Karibu tena(Welcome again)</h4>
                        </div>
                        <form action="../backEnd/handleLogin.php" method="post">

                            <div class="row mb-3">
                                <input type="text" class="form-control rounded-pill" name="emailAddress"
                                    placeholder="Email Address">
                            </div>
                            <div class="row mb-3">
                                <input type="password" class="form-control rounded-pill" name="password"
                                    placeholder="Password">
                            </div>
                            <div class="row mb-3">
                                <input type="submit" class="rounded-pill btn btn-success" name="login" value="Login">
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <button onclick="window.location='<?php echo $login_url;?>'" type="button" class="rounded-pill btn btn-danger"><i class="fa fa-google-plus-official"></i> login with
                                    Google</button>
                            </div>
                        </form>
                        <div class="text-center">
                            <a href="" class="small">Forgot password</a>
                        </div>
                        <div class="text-center">
                            <a href="register.php" class="small">have no an account? Create account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>