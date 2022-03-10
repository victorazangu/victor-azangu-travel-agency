<?php


session_start();

$_SESSION = array();

header("Location:../frontEnd/index.php");

exit();
