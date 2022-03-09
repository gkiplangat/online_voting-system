<!--SQL QUERY START HERE-->
<?php
                $sql ="SELECT *FROM candidates
                ORDER BY id";
                $query =$con->query($sql);
                WHILE($row=$query->fetch_assoc())
                {
                ?>
<tr>
   
    <td><?php echo $row['fullname'];?></td>
    <td><?php echo $row['idno'];?></td>
    <td><?php echo $row['position'];?></td>
   
    <td scope=" col">
        <button type="button" class="btn btn-primary editbtn" data-toggle="modal" data-target="#editmodal">
            <i class="bi bi-pencil-square"></i> Edit
        </button>
    </td>
    <td scope=" col">
        <a href="#"><button type="button" class="btn btn-danger deletebtn"> <i
                    class="bi bi-trash"></i>Delete</button></a>
    </td>
</tr>
<?php
                }
                ?>
<script>
$(document).ready(function() {

            $('.editbtn').on(click, function() {
                $('#editmodal').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {

                    return $(this).text();
                    }).get();
                     console.log(data);
                    $('#update_id').var(data[0]);
                    $('#fullname').var(data[1]);
                    $('#idno').var(data[2]);
                    $('#email').var(data[3]);
                    $('#phone').var(data[4]);
                    $('#photo').var(data[5]);
                    $('#position').var(data[6]);
                    $('#age').var(data[7]);
                });
            });
</script>