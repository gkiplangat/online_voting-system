<?php
//===Connection to the Database====================
include ('actions/connect.php');
//===============Session Start====================
//session_start();
//if(!isset($_SESSION['fullname'])){
 //header("Location:index.php");
//}
 
//===============Session Start====================
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>voting-Dashboard</title>
  <link rel="stylesheet" href="Admin/dashboard/css/bootstrap.min.css">
</head>

<body>
  <div class="container-fluid mt-5">
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
               <td scope=" col">
                <div class="form-group mb-3">
                  <input type="radio" name="president"
                    value="<?php echo $data['fullname'];?>" /><?php echo $data['fullname'];?>
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



</body>

</html>