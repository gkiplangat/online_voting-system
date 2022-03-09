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
     <form action="partials/delete_voter.php" Method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <th ><input type="submit" name="delete" class="btn btn-danger" value="DELETE" ></th>
    </form>
 </tr>
 <?php
                }
                ?>