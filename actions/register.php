<?php
include ('connect.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$std = $_POST['std']; 

if($password!=$cpassword){
    echo '<script>
    alert("Passwords did not match");
    window.location="../partials/registration.php"
    </script>';
} else {
    move_uploaded_file($tmp_name, "../uploads/$image");
    $sql = "INSERT INTO userdata (username,email,password,photo,standard)VALUES ('$username','$email','$password','$image','$std')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<script>
        alert("Wooow! Registration Successfully");
        window.location="../index.php";
        </script>';
    } else {
        die(mysqli_error($con));
    }
    
}
?>