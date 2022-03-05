<?php
//===Connection to the Database====================
include ('actions/connect.php');
//===============Session Start====================
session_start();
if(!isset($_SESSION['username'])){
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
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ms-auto">
                    <!-----------------User Name-------------------->
                    <?php echo '<h3 class ="text-light my-3 p-3">'. $_SESSION['username'].'</h3>';?>
                    <!-----------------User Name-------------------->
                </div>

                <ul class="navbar-nav   mb-2 mb-lg-0">
                        <button class="btn btn-info text-light fw-bold" href="logout.php"> <i class="bi bi-person-fill "></i>LOGOUT</button>
                </ul>
            </div>
        </div>
    </nav>
    <!--navbar-->
   
    <main class="mt-5 pt-3">
        <?php include 'vote_here.php';?>
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