<?php
include ('../../../actions/connect.php');

$fullname = $_POST['fullname'];
$idno = $_POST['idno'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$age = $_POST['age']; 
$status=$_POST['status'];
if($age<18){
    echo '<script>
    alert("The citizen is under_age");
    window.location="../voters.php"
    </script>';
}else{

    move_uploaded_file($tmp_name, "../uploads/$image");
    $sql = "INSERT INTO voters (fullname,idno,email,phone,photo,age,status)VALUES ('$fullname','$idno','$email','$phone','$image','$age',0)";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<script>
        alert("Wooow! Registration Successfully");
        window.location="../voters.php";
        </script>';
    } else {
        die(mysqli_error($con));
    }
    
}
?>