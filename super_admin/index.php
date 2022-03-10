<?php
include '../actions/connect.php';
session_start();
error_reporting(0);
if(isset($_SESSION['username'])){
    header("Location: index.php");
}
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password =$_POST['password'];
    $sql = "SELECT * FROM s_admin WHERE email ='$email' AND password='$password'";
    $result = mysqli_query($con, $sql);
    if($result-> num_rows >0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location:admin-dashboard.php");
    }else {
        echo "<script>alert('Woops! Email or password is wrong.')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-voting system</title>
    <link rel="stylesheet" href="../Admin/dashboard/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Admin/login.css">

</head>

<body>
    <div class="container text-center text-info">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight:800;">Super-Admin Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $_POST['email'];?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password'];?>"
                    required>
            </div>
            <div class="input-group d-flex justify-content-center">
                <button name="submit" class="btn btn-info">Login</button>
            </div>
        </form>
    </div>
</body>

</html>