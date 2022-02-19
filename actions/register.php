<?php
include ('connect.php');

$username = $_POST['username']; 
$mobile = $_POST['mobile']; 
$password = $_POST['password']; 
$cpassword = $_POST['cpassword']; 
$image = $_POST['photo']['name']; 
$tmp_name = $_POST['photo']['tmp_name']; 
$std = $_POST['std']; 

if($password!=$cpassword){
    echo '<script>
    alert("Passwords did not match");
    window.location="../partials/registration.php"
    </script>';
}
?>