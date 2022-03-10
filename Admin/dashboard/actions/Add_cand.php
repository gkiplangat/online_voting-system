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
    $position = $_POST['position']; 
    $age = $_POST['age']; 
   
     //Check if the candidate ID Already Exist
     $check_id = mysqli_num_rows(mysqli_query($con, "SELECT idno FROM candidates WHERE  idno='$idno'"));
     if ($check_id > 0) {
        $_SESSION['status'] = "The ID you entered is  Already taken";
        header("Location: ../Candidates.php");
    }else{
        move_uploaded_file($tmp_name, "../../../uploads/$image");
        $sql = "INSERT INTO candidates (admin,fullname,idno,email,phone,photo,position,age)VALUES ('$admin','$fullname','$idno','$email','$phone','$image','$position','$age')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $_SESSION['status'] = "Inserted Successfully";
            header("Location: ../candidates.php");
        }else {
            $_SESSION['status'] = "Something Went wrong";
            header("Location: ../Candidates.php");
        }
    }

?>