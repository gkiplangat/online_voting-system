<?php
include ('connect.php');

$fullname = $_POST['fullname'];
$idno = $_POST['idno'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$age = $_POST['age']; 
if($age<18){
    echo '<script>
    alert("The citizen is under_age");
    window.location="../groups/voters.php"
    </script>';
}else{

move_uploaded_file($tmp_name, "../uploads/voters/$image");
    $sql = "INSERT INTO voters (fullname,idno,email,phone,photo,age)VALUES ('$fullname','$idno','$email','$phone','$image','$age')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<script>
        alert("Wooow! Registration Successfully");
        window.location="../groups/voters.php";
        </script>';
    } else {
        die(mysqli_error($con));
    }
    
}
?>