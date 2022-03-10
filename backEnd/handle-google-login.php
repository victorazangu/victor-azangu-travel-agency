<?php
include "../google-api/vendor/autoload.php";


$gClient = new Google_Client();

$gClient->setClientId("962590789314-1dgrf0ke94h096pcloutk39j1br52ebg.apps.googleusercontent.com");
$gClient->setClientSecret("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");
$gClient->setApplicationName("victor-azangu-travel-agency");
$gClient->setRedirectUri("http://localhost/victorProject/frontEnd/userdashboard.php");

$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

$login_url=$gClient->createAuthUrl();

session_start();


if (isset($_GET['code'])){
    //exchanges the valid authentication token
    $token=$gClient->fetchAccessTokenWithAuthCode($_GET['code']);
    if (!isset($token['error'])){
        $gClient->setAccessToken($token['access_token']);
        //stores token in a session
        $_SESSION['access_token']=$token['access_token'];

        //get users data from google services
        //calling it from google client
        //we create an object usnig google services
        $gservives=new Google_Service_Oauth2($gClient);

        //geting profile data
        $data =$gservives->userinfo->get();
         if (!empty($data['given_name'])){
             $firstname=$data['given_name'];
             $_SESSION['firstname']=$firstname;
         }
         if (!empty($data['family_name'])){
             $lastname=$data['family_name'];
             $_SESSION['lastname']=$lastname;
         }
         if (!empty($data['email'])){
             $email=$data['email'];
             $_SESSION['email']=$email;
         }
        if (!empty($data['gender'])){
            $gender=$data['gender'];
            $_SESSION['gender']=$gender;
        }
        if (!empty($data['picture'])){
            $picture=$data['picture'];
            $_SESSION['picture']=$picture;
        }
        $_SESSION['firstname']=$firstname;
        $_SESSION['lastname']=$lastname;
        $_SESSION['email']=$email;
       // $_SESSION['gender']=$gender;
        $_SESSION['picture']=$picture;


$sql="INSERT INTO `gusers`(`given_name`, `family_name`, `email`, `gender`, `picture`)
 VALUES ('$firstname','$lastname','$email','$gender','$picture')";

$result=$result=mysqli_query($link,$sql);

    }

}
