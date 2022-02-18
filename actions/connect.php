<?php
 $con = mysqli_connect("loalhost", "root", "", "votingsystem");
if($con){
    echo "Connection Succesfully";
}else{
    die(mysqli_error($con));
}

?>