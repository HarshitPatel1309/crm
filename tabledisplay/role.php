<?php include '../config/core.php';?>
<?php include '../config/database.php';?>
<?php include '../login_checker.php';?>
<div class="table-responsive">
  <table id="zero_config" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Short Name</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $result=mysqli_query($conn,"SELECT * FROM `tbl_role` WHERE `removedata` ='0'");
        while($row=mysqli_fetch_array($result))
        {
      ?>
        <tr>
          <td><?php echo $row['role_name']; ?></td>
          <td><?php echo $row['role_shortname']; ?></td>
          <td>
            <?php
              if($row['status']==1){
            ?>
              <button type="button" onclick="roleinac(1,<?php echo $row['role_id']; ?>)" class="btn btn-success waves-effect waves-light">Active</button>
            <?php 
              }else{
            ?>
              <button type="button" onclick="roleinac(0,<?php echo $row['role_id']; ?>)" class="btn btn-danger waves-effect waves-light">Inactive</button>
            <?php 
              }
            ?>
          </td>
          <td>                                            
              <button type="button" class="btn btn-info" title="Edit" onclick="editload(<?php echo $row['role_id']; ?>)"><i class="far fa-edit"></i></button>
              <button type="button" onclick="deleteload(<?php echo $row['role_id']; ?>)" class="btn btn-danger js-sweetalert" title="Delete"><i class="far fa-trash-alt"></i></button>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<?php include '../includes/table.php'; ?>