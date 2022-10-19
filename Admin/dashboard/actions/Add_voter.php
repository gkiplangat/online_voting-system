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
if($password!=$cpassword){
    echo '<script>
    alert("Passwords did not match");
    window.location="../voters.php"
    </script>';
    
    
}else{
     //Check if the Voter ID No Already Exist
     $check_id = mysqli_num_rows(mysqli_query($con, "SELECT idno FROM voters WHERE  idno='$idno'"));
     if ($check_id > 0) {
        $_SESSION['status'] = "The ID you entered is  Already taken";
        header("Location: ../voters.php");
     }else{
            move_uploaded_file($tmp_name, "../uploads/$image");
            $sql = "INSERT INTO voters (admin,fullname,idno,email,phone,photo,password)VALUES ('$admin','$fullname','$idno','$email','$phone','$image','$password')";
            $result = mysqli_query($con, $sql);
            //Check if the Voter is Registered Successfully
            if ($result) {
                $_SESSION['status'] = "Inserted Successfully";
                 header("Location: ../voters.php");
                } else {
                    $_SESSION['status'] = "Something Went wrong";
                    header("Location: ../voters.php");
                }
            }
}
