<!DOCTYPE html>
<html lang="en">

<head>
    <!--Title-->
    <title>login-Online Voting System</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Gideon Kiplangat" />

    <!--  Description  -->
    <meta name="description" content="userinterface, voting system, voter," />
    <!-- Keywords  -->
    <meta name="keywords" content="form, container, header, footer">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font-awesome Link -->
    <link rel="stylesheet" href="css/all.min.css">
    <!--CSS link -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-dark">
    <h1 class="text-info text-center p-3">Online Voting System</h1>
    <p class="text-info text-center "><i>Your Vote, Your Voice</i></p>
    <div class="bg-secondary py-4">
        <div class="container rounded bg-info  text-center">
            <h2 class="text-center text-white">Login</h2>
            <form action="actions/login.php" method="POST" class="p-3 ">
                <div class="mb-3">
                    <input type="text" class="form-control w-80 m-auto" name="username"
                        placeholder="Enter Your Username" required="required">
                </div>
                <div class="mb-3">
                    <input type="tel" class="form-control w-80 m-auto" name="mobile" placeholder="Enter Your Mobile No"
                        required="required" minlength="10" maxlength="10">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-80 m-auto" name="password"
                        placeholder="Enter Your Password" required="required">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-control w-80 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">Login</button>
                <p>Don't have an Account <a href="partials/registration.php" class="text-white">Register Here</a> </p>
            </form>
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

</body>

</html>