<?php
session_start();
include ('connect.php');

if(isset($_POST['submit']))
{
    $voter  = $_POST['voter'];
    $president  = $_POST['president'];
    $secretary  = $_POST['secretary'];
    $treasurer  = $_POST['treasurer'];
    $status  = $_POST['status'];
    //Check if the Voter Already Voted
     $check_voter = mysqli_num_rows(mysqli_query($con, "SELECT voter FROM votes WHERE voter='$voter' AND status=1"));
     if ($check_voter > 0) {
         $_SESSION['status'] = "You Already Voted";
         header("Location: ../home.php");
        }else{
            $query = "INSERT INTO votes (voter,president,secretary,treasurer,status) VALUES ('$voter','$president','$secretary','$treasurer',1)";
            $query_run = mysqli_query($con, $query);
            if($query_run){
                $_SESSION['status'] = "You Voted Successfully";
                header("Location: ../home.php");
            }else{
                $_SESSION['status'] = "Something Went Wrong";
                header("Location: ../home.php");
            }
        }
}
?>