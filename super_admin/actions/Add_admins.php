<?php
include ('../../../actions/connect.php');
session_start();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if($age<18){
    echo '<script>
    alert("The citizen is under_age");
    window.location="../admins.php"
    </script>';
}else{

move_uploaded_file($tmp_name, "../partials/uploads/$image");
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