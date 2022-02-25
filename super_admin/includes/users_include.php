<?php
include ('../../actions/connect.php');
//session_start();
//if(!isset($_SESSION['username'])){
    //header("Location:index.php");
//}
?>
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Admin-Dashboard</title>
    <!--Styling the ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,file-->
    <link rel="stylesheet" href="../../Admin/dashboard/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../Admin/dashboard/css/dataTables.bootstrap5.min.css" />
    <!-- font-awesome icon -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../Admin/dashboard/css/style.css" />

</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <!--offcanvas trigger-->
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
            </button>
            <!--offcanvas trigger-->


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav   mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a href="../logout.php">Logout</a>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--navbar-->
    <!--offcanvas-->

    <div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">

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
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="users.php" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <span class="me-2"><i class="fa fa-users"></i></span>
                            <span>Users</span>
                        </a>
                    </li>

                </ul>

            </nav>


        </div>
    </div>
    <!--offcanvas-->

    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 fw-bold fs-3">Dashboard</div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card text-white bg-primary h-100">
                        <div class="card-header">Total No. of Candidates</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <span>
                                        <i class="bi bi-people" style="font-size: 2.5rem;"></i>
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <?php
                                    $query ="SELECT  id FROM users ORDER BY id";
                                    $query_run =mysqli_query($con, $query);
                                    $row = mysqli_num_rows($query_run);
                                    echo '<h2>'.$row.'</h2>';
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php include '../users.php';?>
            </div>
        </div>
    </main>
    <!--adding js ...................................files-->
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js">
    </script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>


</body>

</html>