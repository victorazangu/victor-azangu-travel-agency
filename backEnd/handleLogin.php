<?php
include "config.php";

if (isset($_POST["login"])){
    $userEmail=$_POST["emailAddress"];
    $userpassword=$_POST["password"];

    //comparing the data with the one in the database

    $sql="SELECT * FROM `users` WHERE  emailAddress='$userEmail'";
    $result = mysqli_query($link,$sql);
    //if our query runs
    if ($result){
        //helps to check if there is data that matches the email selected
        $data=mysqli_num_rows($result);

        if ($data==1){
            while ($row=mysqli_fetch_array($result)){
                $id=$row["ID"];
                $emailAddress=$row["emailAddress"];
                $password=$row["password"];

                //verify the password ;compaire the hash password and not hashed one
                if (password_verify($userpassword,$password)){
                    session_start();
                    $_SESSION["loggedIn"]=true;
                    $_SESSION["id"]=$id;
                    $_SESSION["username"]=$emailAddress;
                    header("location:../frontEnd/book.php");

                }else{
                    echo "Wrong password!";
                }

            }
        }else{
            echo "<p class='alert-danger'>No such email address in our database!</p>";
        }

    }
}