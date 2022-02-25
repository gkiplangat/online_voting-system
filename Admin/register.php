<?php
include 'config.php';
session_start();
error_reporting(0);
if(isset($_SESSION['username'])){
    header("Location: Welcome.php");
}
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    if($password == $cpassword){
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if(!$result->num_rows>0){
            #Insert Statement
            $sql = "INSERT INTO users (firstname, lastname,username, email, password) 
            VALUES('$firstname','$lastname','$username','$email','$password')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo " <script>alert('Wow, User Regestration Complete')</script>";
                $firstname = "";
                $lastname = "";
                $username = "";
                $email = "";
                $_POST['password']= "";
                $_POST['cpassword']= "";
            }else{
                echo " <script>alert('Something Went wrong, Try again')</script>";
            }
        }else{
            echo " <script>alert('User already exist in our system')</script>";
        }
    }else{
        echo "<script> alert ('Password not Matched.')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Register Form -Baba System</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight:800;"> Sign Up</p>
            <div class="input-group">
                <input type="text" placeholder="First Name" name="firstname"  value="<?php echo $_POST['firstname'];?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Last Name" name="lastname"  value="<?php echo $_POST['lastname'];?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username"  value="<?php echo $_POST['username'];?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email"  value="<?php echo $_POST['email'];?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password"  value="<?php echo $_POST['password'];?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder=" Confirm Password" name="cpassword"  value="<?php echo $_POST['cpassword'];?>" required>
            </div>
            <div class="input-group">
               <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Already have an Account ? <a href="index.php">login Here</a></p>
        </form>
    </div>
</body>
</html>