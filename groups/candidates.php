<?php
include ('../actions/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Title-->
    <title>Candidates-Online Voting System</title>
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!--Table-->
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-center text-info my-3">Candidates</h2>
            </div>
            <div class="col-md-4">
                <!--Add New Candidates Button-->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary my-3" data-toggle="modal"
                    data-target="#exampleModalCenter">
                    Add New
                </button>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
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
                $sql ="SELECT *FROM candidates";
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
                        <button type="button" class="btn btn-info" data-toggle="modal"
                            data-target="#exampleModalCenter">
                            Edit
                        </button>
                        <button type="button" class="btn btn-danger">Delete</button>

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