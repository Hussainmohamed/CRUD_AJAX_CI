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
    <img width='40px' height='40px' src='./assets/images/<?php echo $i; ?>'>
    <?php } ?></td>
    <td><a href="javascript:void(0)" data-backdrop="static" id="edit-emp" data-toggle="modal" data-target="#mediumModal" onclick="edit_emp(<?php echo $row['Eid']; ?>)" class="btn btn-info">Edit</a></td>
    <td><a href="javascript:void(0)" id="del-emp" class="btn btn-danger" onclick="del_emp(<?php echo $row['Eid']; ?>)">Delete</a></td>   
</tr>
<?php } ?>