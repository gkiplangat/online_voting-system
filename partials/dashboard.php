<?php
session_start();
$data=$_SESSION['data'];
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

<body class="bg-secondary text-light">
    <div class="container-fluid my-5">
        <a href="../"><button class="btn btn-dark text-light px-3">Back</button></a>
        <a href="logout.php"><button class=" btn btn-dark text-light px-3">Logout</button></a>
        <h1 class="my-3">Online Voting System</h1>
        <div class="row my-5">
            <div class="col-md-7">
                <!--Groups-->
                <div class="row">
                    <div class="col-md-4">
                        <img src="" alt=" Group Image">
                    </div>
                    <div class="col-md-8">
                        <strong class="text-dark h5">Group Name: </strong><br> <br>
                        <strong class="text-dark h5">Votes: </strong><br> <br>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-md-5">
                <!--User profile-->
                <img src="../uploads/<?php echo $data['photo']?>" class="img-circle" alt="User image">
                <br>
                <br>
                <strong class="text-dark h5">Name: </strong><?php echo $data['username']?><br> <br>
                <strong class="text-dark h5">Mobile: </strong><?php echo $data['mobile']?><br> <br>
                <strong class="text-dark h5">Status: </strong><?php echo $data['status']?><br> <br>

            </div>
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