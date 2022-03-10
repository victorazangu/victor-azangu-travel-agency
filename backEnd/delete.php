<?php

session_start();
//check if user has logged in?

if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true){
    header("location:index.php");
    exit();
}
include "config.php";

$sql = "SELECT * FROM `messages` ";
#execute query
$result = mysqli_query($link, $sql);

#check
if ($result) {
    $data= mysqli_num_rows($result);
#is there data here?
    if ($data > 0) {


        while ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $nameMessage = $row['nameMessage'];
            $emailMessage = $row['emailMessage'];
            $subjectMessage = $row['subjectMessage'];
            $message = $row['message'];

        }
    }
}

if (isset($_POST["delete"]) and !empty($_POST["id"])){
    $id = $_POST["id"];
    $sql = "DELETE FROM `messages` WHERE id=$id";
    $result = mysqli_query($link, $sql);

    if ($result){
        echo "<div class='row m-2 text-center'>";
        echo "<p class='alert alert-danger'>Record deleted Successfully</p>";
        echo "<a class='btn btn-primary col-md-4' href='unemployment_form.php'>BACK</a>";
        echo "</div>";
        header("location:adminDashboard.php");

    }else{
        echo "Error executing query $sql" .mysqli_error($link);
    }

}else{

}

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>delete</title>
        <link rel="stylesheet" href="css/unemployment_form.css">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
    <div class="container">


           <div class="row m-2">
                <div class="alert alert-warning">

                    <form action="delete.php" method="post">
                        <div class="p-2 text-center">
                            <label class="form-label">Are you sure you want to delete this record?</label> <br>
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                        </div>
                        <div class="p-2 text-center">
                            <input type="submit" name="submit" value="YES" class="btn btn-danger col-md-3">
                            <a href="unemployment_form.php" class="btn btn-primary col-md-3">NO</a>
                        </div>
                    </form>

                </div>
            </div>

    </div>
    </body>
    </html>


