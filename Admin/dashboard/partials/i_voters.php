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
     <td scope="col">
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">
             <i class="bi bi-pencil-square"></i> Edit
         </button>
     </td>
     <td>
         <a href="../actions/cand_delete.php"><button type="button" class="btn btn-danger"> <i
                     class="bi bi-trash"></i>Delete</button></a>
     </td>
 </tr>
 <?php
                }
                ?>