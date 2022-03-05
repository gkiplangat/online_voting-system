<?php
session_start();
include ('connect.php');

if(isset($_POST['submit']))
{
   
    $president  = $_POST['president'];
    $secretary  = $_POST['secretary'];
    $treasurer  = $_POST['treasurer'];
    $status  = $_POST['status'];

    $query = "INSERT INTO votes (president,secretary,treasurer,status) VALUES ('$president','$secretary','$treasurer',1)";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "You Voted Successfully";
        header("Location: ../home.php");
    }
    else{
        $_SESSION['status'] = "Something Went Wrong";
        header("Location: ../home.php");
    }
}
?>