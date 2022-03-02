<?php 
//index.php
include ('../actions/connect.php');
 $sql ="SELECT  president, COUNT(*) FROM demo Group by president ORDER BY COUNT(*) DESC;";
                $query =$con->query($sql);
                WHILE($row=$query->fetch_assoc())
                $name=$row['president'];
                $votes=$row['COUNT(*)'];
//$query = "SELECT * FROM account";
$result = mysqli_query($con, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ Candidate:'".$name."', Votes:".$votes."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>


<!DOCTYPE html>
<html>
 <head>
  <title>chart with PHP & Mysql | lisenme.com </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container"style="width:700px;">
   <h2 align="left">Presidential Votes Tally</h2>
   <br /><br />
   
       <div  id="president" >
       </div>
      
       
       

  
  </div>
 </body>
</html>

<script>
Morris.Bar({
 element : 'president',
 data:[<?php echo $chart_data; ?>],
 xkey:'Candidates',
 ykeys:['Votes'],
 labels:['Votes'],
 hideHover:'auto',
 stacked:true
});

</script>