<?php
include ('connect.php');

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$std = $_POST['std']; 

$sql="SELECT * FROM userdata WHERE username='$username'AND
mobile='$mobile' AND password=''$password AND standard='$std'";

$result=mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0){
    $sql = "SELECT username, photo, votes,id FROM userdata WHERE standard='group'";
    $resultgroup=mysqli_query($con, $sql);
    if(mysqli_num_rows($resultgroup)>0){
        $groups=mysqli_fetch_all($resultgroup, MYSQLI_ASSOC);
    }
}else{
    echo '<script>
        alert("Invalid Credentials");
        window.location="../index.php";
        </script>';
}

?>