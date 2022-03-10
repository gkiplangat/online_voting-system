<!DOCTYPE html>
<html lang="en">

<head>
    <!--Title-->
    <title>welcome</title>
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
    <link rel="stylesheet" href="Admin/dashboard/css/bootstrap.min.css" />
    <link rel="stylesheet" href="Admin/dashboard/css/dataTables.bootstrap5.min.css" />
    <!-- font-awesome icon -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!--Custom CSS File-->
    <link rel="stylesheet" href="Admin/dashboard/css/style.css" />
</head>

<body class="bg-secondary">

    <nav class="navbar navbar-expand-lg bg-dark text-info">
        <!---Logo------------------------->
        <img src="Admin/dashboard/images/logo.png" alt="logo" width="60" height="60">
        <!---Logo------------------------->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-info" href="welcome.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="index.php">Login</a>
                </li>
            </ul>

        </div>
    </nav>
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-md-6">
                <p>Welcome to online voting system. To vote, you just need to login into the system for you to get an access to vote</p>
            </div>
            <div class="col-md-6">
                <img src="assets/login_bg.jpg" alt="" width="500" height="350" class=" rounded">
            </div>
        </div>

    </div>

</body>

</html>