<?php
//===Connection to the Database====================
include ('actions/connect.php');
//===============Session Start====================
session_start();
if(!isset($_SESSION['fullname'])){
header("Location:index.php");
}
//===============Session Start====================
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Voting-Dashboard</title>
    <!--Styling the ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,file-->
    <link rel="stylesheet" href="Admin/dashboard/css/bootstrap.min.css" />
    <link rel="stylesheet" href="Admin/dashboard/css/dataTables.bootstrap5.min.css" />
    <!-- font-awesome icon -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Admin/dashboard/css/style.css" />

</head>

<body class="bg-secondary">
    <div class="bg-info">
        <!--navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <!--offcanvas trigger-->
                <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
                </button>
                <!--offcanvas trigger-->
                <!---Logo------------------------->
                <img src="Admin/dashboard/images/logo.png" alt="logo" width="60" height="60">
                <!---Logo------------------------->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex ms-auto">
                        <!-----------------User Name-------------------->
                        <?php echo '<h3 class ="text-light my-3 p-3">'. $_SESSION['fullname'].'</h3>';?>
                        <!-----------------User Name-------------------->
                    </div>

                    <ul class="navbar-nav   mb-2 mb-lg-0">
                        <a href="logout.php" role="button" class="btn btn-Info text-light fw-bold"> <i
                                class="bi bi-person-fill "></i>LOGOUT</a>
                    </ul>
                </div>
            </div>
        </nav>
        <!--navbar-->
    </div>


    <main class="mt-5 pt-5">
        <!---Table with the Candidates to be voted for-->
           <div class="container-fluid my-5">
               <!--Form Start-->
               <form action="actions/i_Vote.php" method="POST">
                   <div class="card table-responsive my-5 ">
                       <div class="row card-header bg-dark">
                           <div class="col-md-6 text-info">
                               <h2>Vote Here</h2>
                               <h6 class="font-italic text-light">Your Vote Your Voice</h6>
                           </div>
                           <div class="col-md-6">
                               <!--Notification Message upon submission-->
                               <?php
            if(isset($_SESSION['status']))
            {?>
                               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                   <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                   </button>
                               </div>
                               <?php
            unset($_SESSION['status']);
                    }
                    ?>
                               <!--Notification Message upon submission-->
                           </div>
                       </div>


                       <table class="table table-bordered ">
                           <h3 class="bg-info text-light text-center">President</h3>
                           <thead class="text-info bg-dark">
                               <tr>
                                   <th scope="col">S/NO</th>
                                   <th scope="col">Photo</th>
                                   <th scope="col">Full Name</th>
                                   <th scope="col">Select</th>
                               </tr>
                           </thead>
                           <tbody class="text-dark bg-light">
                               <!--SQL QUERY START HERE-->
                               <?php
                                 $sql ="SELECT  id, photo, fullname FROM candidates WHERE position='president'";
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
                                           <input class="disable" type="radio" name="president"
                                               value="<?php echo $row['fullname'];?>" /><?php echo $row['fullname'];?>
                                       </div>
                                   </td>
                               </tr>
                               <?php
             }
             ?>
                           </tbody>
                       </table>


                       <table class="table table-bordered">
                           <h3 class="bg-info text-light text-center">Secretary General</h3>
                           <thead class="text-info bg-dark">
                               <tr>
                                   <th scope="col">S/NO</th>
                                   <th scope="col">Photo</th>
                                   <th scope="col">Full Name</th>
                                   <th scope="col">Select</th>
                               </tr>
                           </thead>
                           <tbody class="text-dark bg-light">
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
                                           <input class="disable" type="radio" name="secretary"
                                               value="<?php echo $row['fullname'];?>" /><?php echo $row['fullname'];?>
                                       </div>
                                   </td>
                               </tr>
                               <?php
             }
             ?>
                           </tbody>
                       </table>

                       <table class="table table-bordered">
                           <h3 class="bg-info text-light text-center">Treasurer</h3>
                           <thead class="text-info bg-dark">
                               <tr>
                                   <th scope="col">S/NO</th>
                                   <th scope="col">Photo</th>
                                   <th scope="col">Full Name</th>
                                   <th scope="col">Select</th>
                               </tr>
                           </thead>
                           <tbody class="text-dark bg-light">
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
                                           <input class="disable" type="radio" name="treasurer"
                                               value="<?php echo $row['fullname'];?>" /><?php echo $row['fullname'];?>
                                       </div>

                                   </td>
                               </tr>
                               <?php
                                        }
                                
                                        ?>
                           </tbody>
                       </table>

                   </div>
                   <div class="form-group  my-3">
                       <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                   </div>
               </form>
           </div>
        <!---Table with the Candidates to be voted for-->


    </main>
    <!--adding js ...................................files-->
    <script src="Admin/dashboard/js/bootstrap.bundle.min.js"></script>
    <script src="Admin/dashboard/js/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="Admin/dashboard/js/jquery.dataTables.min.js"></script>
    <script src="Admin/dashboard/js/dataTables.bootstrap5.min.js"></script>
    <script src="Admin/dashboard/js/script.js"></script>


</body>

</html>