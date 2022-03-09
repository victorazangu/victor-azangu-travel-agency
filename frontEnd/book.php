<?php
session_start();

 //check if user has looged in?

if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true ){

    header("location:index.php");
    exit();
}

 include "header.php";
include "bookrow.php";
include "bookrow.php";
include "bookrow.php";
include "bookrow.php";

