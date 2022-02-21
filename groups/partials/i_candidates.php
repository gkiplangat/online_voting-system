<!--SQL QUERY START HERE-->
<?php
                $sql ="SELECT *FROM userdata";
                $query =$con->query($sql);
                WHILE($row=$query->fetch_assoc())
                {
                ?>
<tr>
    <td><?php echo $row['username'];?></td>
    <td><?php echo $row['mobile'];?></td>
    <td><?php echo $row['password'];?></td>
    <td><?php echo $row['photo'];?></td>
    <td><?php echo $row['standard'];?></td>
    <td><?php echo $row['status'];?></td>
    <td><?php echo $row['votes'];?></td>
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