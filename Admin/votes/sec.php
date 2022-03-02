<?php
include ('../../actions/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Title-->
    <title>Votes_Counts-Dashboard</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Gideon Kiplangat" />

    <!--  Description  -->
    <meta name="description" content="userinterface, voting system, voter," />
    <!-- Keywords  -->
    <meta name="keywords" content="form, container, header, footer">
</head>

<body>
    <!--Table-->
    <div class="container-fluid table-responsive">
         <div class="card bg-info">
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Votes</th>
                </tr>
            </thead>
            <tbody>
                <!--SQL QUERY START HERE-->
                <?php
                $sql ="SELECT  secretary, COUNT(*) FROM votes Group by secretary ORDER BY COUNT(*) DESC;";
                $query =$con->query($sql);
                WHILE($row=$query->fetch_assoc())
                {
                ?>
                <tr class="text-light" style="font-weight:bold;">
                    <td><?php echo $row['secretary'];?></td>
                    <td ><?php echo $row['COUNT(*)'];?></td>
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