<?php
include "config.php";


if(isset($_POST['submitMessage'])){
$nameMessage=$_POST["nameMessage"];
$emailMessage=$_POST["emailMessage"];
$subjectMessage=$_POST["subjectMessage"];
$message=$_POST["message"];


if (!empty($message)){

    $sql="INSERT INTO `messages`(`nameMessage`, `emailMessage`, `subjectMessage`, `message`) 
VALUES ('$nameMessage','$emailMessage','$subjectMessage','$message')";
    $result=mysqli_query($link,$sql);
}else{
    echo "Error sending massage".mysqli_error($link);
}
die();
}

