<?php
include "../backEnd/config.php";
session_start();
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
                $user_type=$row['usertype'];

                //verify the password ;compaire the hash password and not hashed one
                if (password_verify($userpassword,$password)){
                    if ($row['usertype']==''){


                        $_SESSION["loggedin"]=true;
                        $_SESSION["id"]=$id;
                        $_SESSION["username"]=$emailAddress;
                        $_SESSION['usertype']==$user_type;

                        header("location:../frontEnd/userdashboard.php");
                    }elseif ($row['usertype']=='admin'){

                        $_SESSION["loggedin"]=true;
                        $_SESSION["id"]=$id;
                        $_SESSION["username"]=$emailAddress;
                        $_SESSION['usertype']==$user_type;

                        header("location:../frontEnd/adminDashboard.php");
                    }else{
                        echo "Please ask admin to assign ypu a user type";
                    }


                }else{
                    echo "Wrong password!";
                }

            }
        }else{
            echo "No such email address in our database!";
        }

    }
}