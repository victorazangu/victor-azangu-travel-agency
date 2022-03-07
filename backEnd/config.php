<?php
$link=mysqli_connect("localhost","root","","victorproject");
if ($link==false){
    die("Error connecting to the serer".mysqli_connect_error($link));
}