<!--SQL QUERY START HERE-->
<?php
                $sql ="SELECT *FROM users";
                $query =$con->query($sql);
                WHILE($row=$query->fetch_assoc())
                {
                ?>
<tr>
    <td><?php echo $row['username'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['password'];?></td>
    <td scope=" col">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">
            <i class="bi bi-pencil-square"></i> Edit
        </button>

        <a href="../actions/cand_delete.php"><button type="button" class="btn btn-danger"> <i
                    class="bi bi-trash"></i>Delete</button></a>
    </td>
</tr>
<?php
                }
                ?>