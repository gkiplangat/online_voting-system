 <!--SQL QUERY START HERE-->
 <?php
                $sql ="SELECT *FROM voters";
                $query =$con->query($sql);
                WHILE($row=$query->fetch_assoc())
                {
                ?>
 <tr>
     <td><?php echo $row['fullname'];?></td>
     <td><?php echo $row['idno'];?></td>
     <td><?php echo $row['email'];?></td>
     <td><?php echo $row['phone'];?></td>
     <td>
         <img src="<?php echo"../uploads/". $row['photo'];?>" width="100px" class="img-circle" alt="image">
     </td>
     <td><?php echo $row['age'];?></td>
     <td scope="col">
         <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit">
             Edit
         </button>
         <button type="button" class="btn btn-danger">Delete</button>


     </td>
 </tr>
 <?php
                }
                ?>