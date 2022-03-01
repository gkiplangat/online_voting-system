<?php
session_start();
include ('../actions/connect.php');

if(isset($_POST['submit']))
{
   
    $president  = $_POST['president'];
    $treasurer  = $_POST['secretary'];
    $secretary  = $_POST['treasurer'];

    $query = "INSERT INTO demo (president,secretary,treasurer) VALUES ('$president','$secretary','$treasurer')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: index.php");
    }
    else{
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: index.php");
    }
}
?>