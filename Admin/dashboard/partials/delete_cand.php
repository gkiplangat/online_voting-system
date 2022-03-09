<?php 
//===Connection to the Database====================
include ('../../../actions/connect.php');
//Session Start
session_start();
if(isset($_POST['delete']))
{
    $id = $_POST['id'];

    $query = "DELETE FROM candidates WHERE id ='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run){
         $_SESSION['status'] = "Deleted Successfully";
         header("Location: ../candidates.php");
    }else
    {
        $_SESSION['status'] = "Data not Deleted";
        header("Location: ../candidates.php");
    }
}
?>