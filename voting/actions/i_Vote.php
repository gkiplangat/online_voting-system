<?php
session_start();
include ('../../actions/connect.php');

if(isset($_POST['submit']))
{
   
    $president  = $_POST['president'];
    $secretary  = $_POST['secretary'];
    $treasurer  = $_POST['treasurer'];

    $query = "INSERT INTO votes (president,secretary,treasurer) VALUES ('$president','$secretary','$treasurer')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: ../vote_here.php");
    }
    else{
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: ../vote_here.php");
    }
}
?>