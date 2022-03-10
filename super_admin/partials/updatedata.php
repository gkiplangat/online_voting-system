<!DOCTYPE html>
<html lang="en">

<head>
    <!--Title-->
    <title>update-data</title>
    <!--Meta Info-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Gideon Kiplangat">
    <!-- description -->
    <meta name="description" content="Online voting system.">
    <!-- keywords -->
    <meta name="keywords" content="Voters, votes, voting">
    <!--Bootstrap files-->
    <link rel="stylesheet" href="../../Admin/dashboard/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../Admin/dashboard/css/dataTables.bootstrap5.min.css" />
    <!-- font-awesome icon -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!--Custom CSS File-->
    <link rel="stylesheet" href="../../Admin/dashboard/css/style.css" />
</head>

<body class="bg-dark">
    <?php 
//===Connection to the Database====================
include ('../../actions/connect.php');
 //Session start
 session_start();
 $id = $_POST['id'];

    $query = "SELECT* FROM candidates WHERE id ='$id'";
    $query_run = mysqli_query($con, $query);
    
    if($query_run){
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
    <div class="container text-center my-5 d-flex justify-content-center">
        <div class="jumbotron d-flex justify-content-center bg-light rounded" style="width:500px;">

            <hr>
            <!-- Modal  For Adding New Candidates-->
            <form class="my-5" action="" method="POST" enctype="multipart/form-data" lass="p-3" style="width:400px;">
                <h4 class="text-center">Update Data</h4>
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                <div class="mb-3" style="width:400px;">
                    <input type="hidden" class="form-control w-80 m-auto" name="admin"
                        value="<?php echo  $_SESSION['username'];?>" required="required">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-80 m-auto" name="fullname"
                        value="<?php echo $row['fullname']?>" placeholder="Full Name" required="required">
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control w-80 m-auto" name="idno" value="<?php echo $row['idno']?>"
                        placeholder="ID No" required="required" minlength="10" maxlength="10">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control w-80 m-auto" name="email" value="<?php echo $row['email']?>"
                        placeholder="Email Address" required="required">
                </div>
                <div class="mb-3">
                    <input type="tel" class="form-control w-80 m-auto" name="phone" value="<?php echo $row['phone']?>"
                        placeholder="Phone No" required="required">
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control w-80 m-auto" name="photo" value="<?php echo $row['photo']?>">
                </div>
                <div class="mb-3">
                    <select name="position" class="form-control w-80 m-auto" value="<?php echo $row['position']?>">
                        <option value="President">President</option>
                        <option value="Secretary General">Secretary General</option>
                        <option value="Treasurer">Treasurer</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-80 m-auto" name="age" value="<?php echo $row['age']?>"
                        placeholder="Age" required="required">
                </div>
                <div class="mb-3">
                    <a href="../candidates.php" class="btn btn-danger">Cancel</a>
                    <button type="submit" name="update" class="btn btn-primary"> Save changes</button>
                </div>
        </div>
        </form>
        <?php
        if(isset($_POST['update']))
        {
             $admin = $_POST['admin'];
             $fullname = $_POST['fullname'];
             $idno = $_POST['idno'];
             $email = $_POST['email'];
             $phone = $_POST['phone'];
             $image = $_FILES['photo']['name'];
             $tmp_name = $_FILES['photo']['tmp_name'];
             $position = $_POST['position']; 
             $age = $_POST['age']; 

             move_uploaded_file($tmp_name, "../../../uploads/$image");
             $query ="UPDATE candidates SET 
             admin=' $admin', 
             fullname='$fullname',
             idno=' $idno', 
             email='$email', 
             phone=' $phone',
             photo='$image',
             position='$position',
             age='$age' WHERE id='$id'";
              $query_run = mysqli_query($con, $query);
               if($query_run){
                   $_SESSION['status'] = "Updated Successfully";
                   header("Location: ../candidates.php");
                }else{
                    $_SESSION['status'] = "There was an error, Try Again";
                    header("Location: ../candidates.php");
                }
        }
        ?>
    </div>
    </div>
    <?php
        }
    }else
    {
        $_SESSION['status'] = "Data not Deleted";
        header("Location: ../candidates.php");
    }

  ?>
</body>

</html>