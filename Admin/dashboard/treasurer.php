<?php
//===Connection to the Database====================
include ('../../actions/connect.php');
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
    <!--Title-->
    <title>Admin-Dashboard</title>
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
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <!-- font-awesome icon -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!--Custom CSS File-->
    <link rel="stylesheet" href="css/style.css" />

</head>

<body style="background:#7C6E7F;">
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
            <img src="images/logo.png" alt="logo" width="50" height="50">
            <!---Logo------------------------->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav   mb-2 mb-lg-0">
                    <a href="../logout.php" role="button" class="btn btn-Info text-light fw-bold"> <i
                            class="bi bi-person-fill "></i>LOGOUT</a>
                </ul>
            </div>
        </div>
    </nav>
    <!--navbar-->
    <!--offcanvas-->

    <div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <!-----------------User Name-------------------->
        <?php echo '<h3 class ="text-light my-3 p-3">'. $_SESSION['username'].'</h3>';?>
        <!-----------------User Name-------------------->
        <div class="offcanvas-body p-0 ">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3"> CORE

                        </div>

                    </li>
                    <li>
                        <a href="index.php" class="nav-link px-3 active">
                            <span class="me-2">
                                <i class="bi bi-speedometer2"></i>
                            </span>
                            <span>Dashboard</span>

                        </a>

                    </li>
                    <li class="my">
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3"> interface

                        </div>

                    </li>
                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#groups" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <span class="me-2"><i class="fa fa-users"></i></span>
                            <span>Groups</span>
                            <span class="right-icon ms-auto">
                                <i class="bi bi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="collapse" id="groups">
                            <div>
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="candidates.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-people"></i></span>
                                            <span>Candidates</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="voters.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-people-fill"></i></span>
                                            <span>Voters</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#positions" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <span class="me-2"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
                            <i class="fa-solid fa-user-group-crown"></i>
                            <span>Positions</span>
                            <span class="right-icon ms-auto">
                                <i class="bi bi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="collapse" id="positions">
                            <div>
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="president.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-person-check-fill"></i></span>
                                            <span>President</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="secretary.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-person-check-fill"></i></span>
                                            <span>Secretary General</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="treasurer.php" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-person-check-fill"></i></span>
                                            <span>Treasurer</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    
                </ul>

            </nav>


        </div>
    </div>
    <!--offcanvas-->

    <main class="mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 fw-bold fs-3 p-3 text-light">Dashboard</div>
            </div>
            <div class="row">
               <!--====Card 1- Total No of Candidates Registered===-->
                <div class="col-md-6 mb-3">
                    <div class="card bg-primary h-100 rounded">
                        <div class="card-header text-light fw-bold">
                            Total No. of Candidates
                        </div>
                        <div class="card-body bg-light text-primary">
                            <div class="row">
                                <div class="col-md-6">
                                    <span>
                                        <i class="bi bi-people" style="font-size: 2.5rem;"></i>
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <?php
                                    $query ="SELECT  id FROM candidates ORDER BY id";
                                    $query_run =mysqli_query($con, $query);
                                    $row = mysqli_num_rows($query_run);
                                    echo '<h2>'.$row.'</h2>';
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--====Card 1- Total No of Candidates Registered===-->
                <!--====Card 2- Total No of Voters Registered===-->
                <div class="col-md-6 mb-3">
                    <div class="card  bg-info h-100 rounded">
                        <div class="card-header text-light fw-bold">
                            Registered Voters
                        </div>
                        <div class="card-body bg-light text-info">
                            <div class="row">
                                <div class="col-md-6">
                                    <span>
                                        <i class="bi bi-people-fill" style="font-size: 2.5rem;"></i>
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <?php
                                    $query ="SELECT  id FROM voters ORDER BY id";
                                    $query_run =mysqli_query($con, $query);
                                    $row = mysqli_num_rows($query_run);
                                    echo '<h2>'.$row.'</h2>';
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====Card 2- Total No of Voters Registered===-->
            </div>
        </div>

        <?php include '../positions/Tres.php';?>


        </div>
    </main>
    <!--adding js ...................................files-->
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>


</body>

</html>