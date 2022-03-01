<?php
include('../../actions/connect.php');
if(isset($_POST['submit_btn']))
{
    $president  = $_POST['president'];
    $secretrary_general  = $_POST['secretary'];
    $treasurer  = $_POST['treasurer'];

    $query = "INSERT INTO votes (president,secretary,treasurer) VALUES ('$president',' $secretrary_general','$treasurer ')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: ../test.php");
    }
    else{
        $_SESSION['status'] = "error";
        header("Location: ..test.php");
    }
}
?>