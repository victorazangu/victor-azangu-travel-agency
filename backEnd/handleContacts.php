<?php

include "../backEnd/config.php";

if (isset($_POST["submitMessage"])) {

    $nameMessage = $_POST["nameMessage"];
    $emailMessage = $_POST["emailMessage"];
    $subjectMessage = $_POST["subjectMessage"];
    $message = $_POST["message"];


    // insert
    $sql = "INSERT INTO `messages`(`nameMessage`, `emailMessage`, `subjectMessage`, `message`) 
VALUES ('$nameMessage','$emailMessage','$subjectMessage','$message')";


    $result = mysqli_query($link, $sql);



    if ($result) {
        echo "<p class='alert alert-success'>Records have been Added</p>";
        header("location:../frontEnd/index.php");
    } else {

        echo "<p class='alert alert-danger'>Error executing query $sql</p>" . mysqli_error($link);
    }


}

