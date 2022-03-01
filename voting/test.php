<?php session_start();
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("votingsystem", $connection);
$query = mysql_query("select * from demo", $connection);
<span>Name:</span> <?php echo $row1['id']; ?>
<span>E-mail:</span> <?php echo $row1['trasurer']; ?>
<span>Contact No:</span> <?php echo $row1['president']; ?>
<span>Address:</span> <?php echo $row1['secretary']; ?>
mysql_close($connection);

?>