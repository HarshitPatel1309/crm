<?php include '../../config/core.php';?>
<?php include '../../config/database.php';?>
<?php include '../../login_checker.php';?>

<div class="table-responsive">
  <table id="zero_config" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Number</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $counter = 1;
        $result=mysqli_query($conn,"SHOW TABLES");
        while($row=mysqli_fetch_array($result)) {
      ?>
        <?php 
          if ('tbl_role' === $row['Tables_in_' . $dbname] || 'tbl_users' === $row['Tables_in_' . $dbname] || 'tbl_login' === $row['Tables_in_' . $dbname] || 'tbl_filedset' === $row['Tables_in_' . $dbname] || 'tbl_showhide' === $row['Tables_in_' . $dbname]) {
              
          }else{
            ?>
        <tr>
          <td><?php echo $counter++; ?></td>
          <td><?php echo $row['Tables_in_' . $dbname]; ?></td>
          <td>                          
                  <button type="button" class="btn btn-info" title="Edit" onclick="editload('<?php echo $row['Tables_in_' . $dbname]; ?>')"><i class="far fa-edit"></i></button>
          </td>
        </tr>
        <?php
              }
            ?>
      <?php } ?>
    </tbody>
  </table>
</div>

<?php include '../../includes/tablepages.php'; ?>