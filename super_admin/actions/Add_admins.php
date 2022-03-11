<?php
include ('../../actions/connect.php');
session_start();
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$cpassword= md5($_POST['cpassword']);
if($password!=$cpassword){

    $_SESSION['status'] = "Password did not Match, Kindly Repeat The Process";
        header("Location: ../admins.php");
   
}else{


    $sql = "INSERT INTO users (username,email,password)VALUES ('$username','$email','$password')";

    $result = mysqli_query($con, $sql);
     if ($result) {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: ../admins.php");
    } else {
        $_SESSION['status'] = "Something Went wrong";
        header("Location: ../admins.php");
    }
    
}
?>