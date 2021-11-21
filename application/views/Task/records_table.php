<table id="data-tbl" class="table table-striped table-bordered data-tbl">
    <thead>
        <tr>
            <th>Employee Name</th>
            <th>Employee Email</th>
            <th>Employee DOB</th>
            <th>Employee Salary</th>
            <th>Employee Qualification</th>
            <th>Employee Experience</th>
            <th>Certifications</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody id="data-table">
        <?php 
foreach($records as $row){
?>
        <tr>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['DOB']; ?></td>
            <td><?php echo $row['Salary']; ?></td>
            <td><?php echo $row['Qualification']; ?></td>
            <td><?php echo $row['Experience']; ?></td>
            <td><?php $img=explode(",",$row['Images']); foreach($img as $i){ ?>
                <a class="btn btn-warning" target="_blank" href='./assets/images/<?php echo $i; ?>'>Download </a><br>

                <?php } ?>
            </td>
            <td><a href="javascript:void(0)" data-backdrop="static" id="edit-emp" data-toggle="modal"
                    data-target="#mediumModal" onclick="edit_emp(<?php echo $row['Eid']; ?>)"
                    class="btn btn-info">Edit</a></td>
            <td><a href="javascript:void(0)" id="del-emp" class="btn btn-danger"
                    onclick="del_emp(<?php echo $row['Eid']; ?>)">Delete</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<script>
    setTimeout(() => {
        $('#data-tbl').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf'
        ]
       
    });  
    }, 500);
//     $(document).ready(function() {
   
// });

</script>