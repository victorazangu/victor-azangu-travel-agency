<?php
include "config.php";

if (isset($_POST["saveChanges"])){

    $fullName=$_POST["fullName"];
    $emailAddress=$_POST["emailAddress"];
    $phoneNumber=$_POST["phoneNumber"];
    $addressLocation=$_POST["addressLocation"];
    $gender=$_POST["gender"];
    $DOB=$_POST["DOB"];

    //inserting photo
    $photoName=$_FILES["photo"]["name"];
    $temporaryName=$_FILES["photo"]["tmp_name"];
    $folder="../assets/img/uploads/".$photoName;

    //inserting details into database
$sql="INSERT INTO `customers`(`fullName`, `emailAddress`, `phoneNumber`, `addressLocation`, `gender`, `DOB`, `photo`) 
VALUES ('$fullName','$emailAddress','$phoneNumber','$addressLocation','$gender','$DOB','$photoName')";

$result=mysqli_query($link,$sql);

//photos
if(move_uploaded_file($temporaryName,$folder)){
    echo "<p class='alert alert-info'>Photo uploaded successfully</p>";
}else{
    echo "<p class='alert alert-warning'>Photo Not uploaded</p>";
}
if ($result){
    echo "<p class='alert alert-info'>Record hae been added successfully</p>";
}else{
    echo "<p class='alert alert-warning'>Error Uploading your Record</p>".mysqli_error($link);
}
}