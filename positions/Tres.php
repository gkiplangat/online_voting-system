<?php
include ('../actions/connect.php');
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
    <div class="container-fluid bg-dark">
        <table class="table bg-secondary">
            <thead>
                <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">ID NO</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">Position</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <!--SQL QUERY START HERE-->
                <?php
                $sql ="SELECT *FROM candidates WHERE position ='Treasurer'";
                $query =$con->query($sql);
                WHILE($row=$query->fetch_assoc())
                {
                ?>
                <tr>
                    <td><?php echo $row['fullname'];?></td>
                    <td><?php echo $row['idno'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['position'];?></td>
                    <td scope="col">
                        <a href="#" class="btn btn-primary btn-lg active">Edit</a>
                        <a href="#" class="btn btn-danger btn-lg active">Delete</a>

                    </td>
                </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
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