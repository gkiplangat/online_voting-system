<?php session_start();

include ('../actions/connect.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">
    
    <div class="container  my-5 bg-info">
                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>
                    <div class="row">
                        <form action="code.php" method="POST">
                       <!--President Start--->
                         <div class="col-md-4">
                        <table class="table table-bordered ">
                             <h3 class="text-center">President</h3>
                            <thead>
                                 <tr>
                                      <th scope="col">S/No</th>
                                      <th scope="col">Photo</th>
                                      <th scope="col">Full Name</th>
                                      <th scope="col">Vote</th>
                                     </tr>
                            </thead>
                            <tbody>
                                 <!--SQL QUERY START HERE-->
                                 <?php
                                 $sql ="SELECT  id, photo, fullname FROM candidates WHERE position='president' ";
                                 $query =$con->query($sql);
                                 WHILE($row=$query->fetch_assoc())
                                 {
                                      ?>
                                       <tr>
                                            <td><?php echo $row['id'];?></td>
                                             <td>
                                                 <img src="<?php echo "uploads/".$row['photo'];?>" width="100px" alt="image">
                                                </td>
                                                <td><?php echo $row['fullname'];?></td>
                                                <td scope=" col">
                                                    <div class="form-group mb-3">
                                                        <input class="disable" type="radio" name="president" value="<?php echo $row['fullname'];?>" /><?php echo $row['fullname'];?>
                                                     </div>
                                                    </td>
                                        </tr>
                                        <?php
                                        }
                                
                                        ?>
                           
                           </tbody>
                        </table>
                       <!--President- Ends-->
                       
                       <!--Secretary Start-->
                       <div class="col-md-4">
                       <table class="table table-bordered ">
                             <h3 class="text-center">Secretary</h3>
                            <thead>
                                 <tr>
                                      <th scope="col">S/No</th>
                                      <th scope="col">Photo</th>
                                      <th scope="col">Full Name</th>
                                      <th scope="col">Vote</th>
                                     </tr>
                            </thead>
                            <tbody>
                                 <!--SQL QUERY START HERE-->
                                 <?php
                                 $sql ="SELECT  id, photo, fullname FROM candidates WHERE position='Secretary General' ";
                                 $query =$con->query($sql);
                                 WHILE($row=$query->fetch_assoc())
                                 {
                                      ?>
                                       <tr>
                                            <td><?php echo $row['id'];?></td>
                                             <td>
                                                 <img src="<?php echo "uploads/".$row['photo'];?>" width="100px" alt="image">
                                                </td>
                                                <td><?php echo $row['fullname'];?></td>
                                                <td scope=" col">
                                                    <div class="form-group mb-3">
                                                        <input class="disable" type="radio" name="secretary" value="<?php echo $row['fullname'];?>" /><?php echo $row['fullname'];?>
                                                     </div>
                                                    </td>
                                        </tr>
                                        <?php
                                        }
                                
                                        ?>
                             </div> 
                             </tbody>
                        </table>
                       <!--Secretary- Ends-->
                            <!--Treausrer- Start-->
                            <div class="col-md-4">
                        <table class="table table-bordered ">
                             <h3 class="text-center">Treasurer</h3>
                            <thead>
                                 <tr>
                                      <th scope="col">S/No</th>
                                      <th scope="col">Photo</th>
                                      <th scope="col">Full Name</th>
                                      <th scope="col">Vote</th>
                                     </tr>
                            </thead>
                            <tbody>
                                 <!--SQL QUERY START HERE-->
                                 <?php
                                 $sql ="SELECT  id, photo, fullname FROM candidates WHERE position='Treasurer' ";
                                 $query =$con->query($sql);
                                 WHILE($row=$query->fetch_assoc())
                                 {
                                      ?>
                                       <tr>
                                            <td><?php echo $row['id'];?></td>
                                             <td>
                                                 <img src="<?php echo "uploads/".$row['photo'];?>" width="100px" alt="image">
                                                </td>
                                                <td><?php echo $row['fullname'];?></td>
                                                <td scope=" col">
                                                    <div class="form-group mb-3">
                                                        <input class="disable" type="radio" name="treasurer" value="<?php echo $row['fullname'];?>" /><?php echo $row['fullname'];?>
                                                     </div>
                                                    </td>
                                        </tr>
                                        <?php
                                        }
                                
                                        ?>
                                </tbody>
                        </table>
                             </div> 
                     <!--Treausrer- Ends-->
                      
                                        <div class="form-group mb-3">
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </div>
                            </form>
                    </div>
              
           
       
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>