<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Admin-Dashboard</title>
    <!--Styling the ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,file-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css" />

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
            <a class="navbar-brand fw-bold text-uppercase me-auto" href="#">Gid</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="d-flex ms-auto">
                    <div class="input-group my-3 my-lg-0">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="button" id="button-addon2"><i
                                class="bi bi-search"></i></button>
                    </div>
                </form>
                <ul class="navbar-nav   mb-2 mb-lg-0">


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
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
                        <a href="#" class="nav-link px-3 active">
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
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample"
                            role="button" aria-expanded="false" aria-controls="collapseExample">
                            <span class="me-2"><i class="bi bi-layout-split"></i></span>
                            <span>layouts</span>
                            <span class="right-icon ms-auto">
                                <i class="bi bi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <div>
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="#" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-layout-split"></i></span>
                                            <span>Nested Links</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#groups" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <span class="me-2"><i class="bi bi-layout-split"></i></span>
                            <span>Groups</span>
                            <span class="right-icon ms-auto">
                                <i class="bi bi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="collapse" id="groups">
                            <div>
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="#" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-layout-split"></i></span>
                                            <span>Candidates</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-layout-split"></i></span>
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
                            <span class="me-2"><i class="bi bi-layout-split"></i></span>
                            <span>Positions</span>
                            <span class="right-icon ms-auto">
                                <i class="bi bi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="collapse" id="positions">
                            <div>
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="#" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-layout-split"></i></span>
                                            <span>President</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-layout-split"></i></span>
                                            <span>Secretary General</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-3">
                                            <span class="me-2"><i class="bi bi-layout-split"></i></span>
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
        <div class="container-fluid bg-secondary">
            <div class="row">
                <div class="col-md-12 fw-bold fs-3">Dashboard</div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card text-white bg-primary h-100">
                        <div class="card-header">Total No. of Candidates</div>
                        <div class="card-body">
                            <h5 class="card-title">School Of Business</h5>
                            <p class="card-text">This is Riara university School of Business and Economics</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card text-white bg-info h-100">
                        <div class="card-header">Registered Voters</div>
                        <div class="card-body">
                            <h5 class="card-title">School Of Computing</h5>
                            <p class="card-text">This is Riara University School of Computing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card text-white bg-primary h-100">
                        <div class="card-header">Voted</div>
                        <div class="card-body">
                            <h5 class="card-title">School Of International Relations and Diplomacy</h5>
                            <p class="card-text"> This is Riara University School of International Relations and
                                Diplomacy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card text-white bg-danger h-100">
                        <div class="card-header">Not Vote</div>
                        <div class="card-body">
                            <h5 class="card-title">School Of Law</h5>
                            <p class="card-text">This is Riara University School of Law.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Charts
                        </div>
                        <div class="card-body">
                            <canvas class="chart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Charts
                        </div>
                        <div class="card-body">
                            <canvas class="chart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col md-12">
                    <div class="card">
                        <div class="card-header">
                            Data Tables
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped data-table" style="width:100%">
                                    <thread>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start Date</th>
                                            <th>Salary</th>
                                        </tr>
                                        <tr>
                                            <td>Gideon Kiplangat</td>
                                            <td>Sofware Engineer</td>
                                            <td>Israel</td>
                                            <td>23</td>
                                            <td>22-03-2023</td>
                                            <td>$9600</td>
                                        </tr>
                                        <tr>
                                            <td>Gideon Kiplangat</td>
                                            <td>Sofware Engineer</td>
                                            <td>Israel</td>
                                            <td>23</td>
                                            <td>22-03-2023</td>
                                            <td>$9600</td>
                                        </tr>
                                        <tr>
                                            <td>Gideon Kiplangat</td>
                                            <td>Sofware Engineer</td>
                                            <td>Israel</td>
                                            <td>23</td>
                                            <td>22-03-2023</td>
                                            <td>$9600</td>
                                        </tr>
                                        <tr>
                                            <td>Gideon Kiplangat</td>
                                            <td>Sofware Engineer</td>
                                            <td>Israel</td>
                                            <td>23</td>
                                            <td>22-03-2023</td>
                                            <td>$9600</td>
                                        </tr>
                                        <tr>
                                            <td>Gideon Kiplangat</td>
                                            <td>Sofware Engineer</td>
                                            <td>Israel</td>
                                            <td>23</td>
                                            <td>22-03-2023</td>
                                            <td>$9600</td>
                                        </tr>
                                        <tr>
                                            <td>Gideon Kiplangat</td>
                                            <td>Sofware Engineer</td>
                                            <td>Israel</td>
                                            <td>23</td>
                                            <td>22-03-2023</td>
                                            <td>$9600</td>
                                        </tr>
                                        <tr>
                                            <td>Gideon Kiplangat</td>
                                            <td>Sofware Engineer</td>
                                            <td>Israel</td>
                                            <td>23</td>
                                            <td>22-03-2023</td>
                                            <td>$9600</td>
                                        </tr>
                                        <tr>
                                            <td>Gideon Kiplangat</td>
                                            <td>Sofware Engineer</td>
                                            <td>Israel</td>
                                            <td>23</td>
                                            <td>22-03-2023</td>
                                            <td>$9600</td>
                                        </tr>
                                        <tr>
                                            <td>Gideon Kiplangat</td>
                                            <td>Sofware Engineer</td>
                                            <td>Israel</td>
                                            <td>23</td>
                                            <td>22-03-2023</td>
                                            <td>$9600</td>
                                        </tr>
                                        <tr>
                                            <td>Gideon Kiplangat</td>
                                            <td>Sofware Engineer</td>
                                            <td>Israel</td>
                                            <td>23</td>
                                            <td>22-03-2023</td>
                                            <td>$9600</td>
                                        </tr>
                                        <tr>
                                            <td>Gideon Kiplangat</td>
                                            <td>Sofware Engineer</td>
                                            <td>Israel</td>
                                            <td>23</td>
                                            <td>22-03-2023</td>
                                            <td>$9600</td>
                                        </tr>
                                        <tr>
                                            <td>Gideon Kiplangat</td>
                                            <td>Sofware Engineer</td>
                                            <td>Israel</td>
                                            <td>23</td>
                                            <td>22-03-2023</td>
                                            <td>$9600</td>
                                        </tr>
                                        <tr>
                                            <td>Gideon Kiplangat</td>
                                            <td>Sofware Engineer</td>
                                            <td>Israel</td>
                                            <td>23</td>
                                            <td>22-03-2023</td>
                                            <td>$9600</td>
                                        </tr>
                                        <var><var><var><var><var>v</var></var></var></var></var>
                                        <tr>
                                            <td>Gideon Kiplangat</td>
                                            <td>Sofware Engineer</td>
                                            <td>Israel</td>
                                            <td>23</td>
                                            <td>22-03-2023</td>
                                            <td>$9600</td>
                                        </tr>
                                    </thread>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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