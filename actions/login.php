<?php
session_start();
include ('connect.php');

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$std = $_POST['std'];

$sql = "SELECT * FROM userdata WHERE email='$email' AND password='$password'";

$result=mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0){

    echo '<script>
        window.location="dashboard/index.php";
        </script>';
}else{
    echo '<script>
        alert("Invalid Credentials");
        window.location="../Admin/index.php";
        </script>';
}

?>