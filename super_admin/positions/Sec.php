<?php
include ('../../actions/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Title-->
    <title>Dashboard-Online Voting System</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Gideon Kiplangat" />

    <!--  Description  -->
    <meta name="description" content="userinterface, voting system, voter," />
    <!-- Keywords  -->
    <meta name="keywords" content="form, container, header, footer">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!--CSS link -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <!--Table-->
    <div class="container-fluid">
        <div class="card bg-info my-3">
             <div class="card-header fw-bold">
                 <div class="row">
                     <div class="col-md-12">
                         <h3>Secretary Position</h3>
                     </div>
                 </div>
             </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Id No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Position</th>
                        <th scope="col">Age</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!--SQL QUERY START HERE-->
                    <?php
                $sql ="SELECT *FROM candidates WHERE position ='Secretary General'";
                $query =$con->query($sql);
                WHILE($row=$query->fetch_assoc())
                {
                ?>
                    <tr>
                        <td><?php echo $row['fullname'];?></td>
                        <td><?php echo $row['idno'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['phone'];?></td>
                        <td>
                            <img src="<?php echo"../uploads/". $row['photo'];?>" width="100px" class="img-circle"
                                alt="image">
                        </td>
                        <td><?php echo $row['position'];?></td>
                        <td><?php echo $row['age'];?></td>
                        <td scope=" col">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>

                            <a href="../actions/cand_delete.php"><button type="button" class="btn btn-danger"> <i
                                        class="bi bi-trash"></i>Delete</button></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>

                </tbody>
            </table>
        </div>

    </div>


    <!--Javascript Libraries-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>