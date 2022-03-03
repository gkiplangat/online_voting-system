<?php
include ('../../../actions/connect.php');
session_start();
$fullname = $_POST['fullname'];
$idno = $_POST['idno'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$position = $_POST['position']; 
$age = $_POST['age']; 
if($age<18){
    echo '<script>
    alert("The citizen is under_age");
    window.location="../candidates.php"
    </script>';
}else{

move_uploaded_file($tmp_name, "../partials/uploads/$image");
    $sql = "INSERT INTO candidates (fullname,idno,email,phone,photo,position,age)VALUES ('$fullname','$idno','$email','$phone','$image','$position','$age')";

    $result = mysqli_query($con, $sql);
     if ($result) {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: ../candidates.php");
    } else {
        $_SESSION['status'] = "Something Went wrong";
        header("Location: ../Candidates.php");
    }
    
}
?>