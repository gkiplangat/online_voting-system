<?php
include ('connect.php');

$fullname = $_POST['fullname'];
$idno = $_POST['idno'];
$cidno = $_POST['cidno'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$position = $_POST['position']; 
if($idno!=$cidno){
    echo '<script>
    alert("Passwords did not match");
    window.location="../partials/registration.php"
    </script>';
}else{

move_uploaded_file($tmp_name, "../uploads/$image");
    $sql = "INSERT INTO candidates (fullname,idno,email,phone,photo,position)VALUES ('$fullname','$idno','$email','$phone','$image',''$position)";

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