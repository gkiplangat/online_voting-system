<?php
include ('../../../actions/connect.php');
session_start();
$admin = $_POST['admin'];
$fullname = $_POST['fullname'];
$idno = $_POST['idno'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$password = md5($_POST['password']); 
$cpassword =md5($_POST['cpassword']); 
$status=$_POST['status'];
if($password!=$cpassword){
    echo '<script>
    alert("Passwords did not match");
    window.location="../voters.php"
    </script>';
}else{

    move_uploaded_file($tmp_name, "../uploads/$image");
    $sql = "INSERT INTO voters (admin,fullname,idno,email,phone,photo,password,status)VALUES ('$admin','$fullname','$idno','$email','$phone','$image','$password',0)";

    $result = mysqli_query($con, $sql);
    if ($result) {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: ../voters.php");
    } else {
        $_SESSION['status'] = "Something Went wrong";
        header("Location: ../voters.php.php");
    }
    
}
?>