<?php
include "../backEnd/config.php";

//when click the register
if(isset($_POST["register"])){
    //picking details from our form

    $firstName = $_POST["firstName"];
    $secondName = $_POST["secondName"];
    $emailAddress = $_POST["emailAddress"];
    $password = $_POST["password"];
    $confirmPass = $_POST["confirmPass"];

    //validating our details and decrypting the password using password_hash method

    if (strlen($password)<8){
        $passwordError= "<p class='alert-danger'>Password must be more than 8 character!</p>";
        echo $passwordError;
    }else{
        $storePassword=password_hash($password,PASSWORD_DEFAULT);
    }
    if ($confirmPass != $password){
        $confirmPasswordError="<p class='alert-danger'>Password do not match!</p>";
        echo $confirmPasswordError;
    }
    if (empty($passwordError) and empty($confirmPasswordError)){
$sql="INSERT INTO `users`( `firstName`, `secondName`, `emailAddress`, `password`) 
VALUES ('$firstName','$secondName','$emailAddress','$storePassword')";
$result=mysqli_query($link,$sql);
if ($result){
    echo "<p class='alert-success'>You have been Registered</p>";
    header("location:../frontEnd/login.php");
}else{
    echo "Error executing query".mysqli_error($link);
}
    }
    //closing connection
    mysqli_close($link);

}