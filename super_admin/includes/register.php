<?php
include ('../../actions/connect.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']); 
$cpassword = md5($_POST['cpassword']); 
if($password==$cpassword){
    echo '<script>
    alert("Password did not Match");
    window.location="users_include.php"
    </script>';
}else{
    $sql = "INSERT INTO users (username,email,password)VALUES ('$username','$email','$password')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<script>
        alert("Wooow! Registration Successfully");
        window.location="users_include.php";
        </script>';
    } else {
        die(mysqli_error($con));
    }
    
}
?>