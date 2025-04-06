<?php include '../../config/core.php';?>
<?php include '../../config/database.php';?>
<?php include '../../login_checker.php';?>

<div class="table-responsive">
  <table id="zero_config" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Number</th>
        <th>Name</th>
        <th>Filed</th>
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
          <?php
            $table_name = $row['Tables_in_' . $dbname];
            $sql_columns = "SHOW COLUMNS FROM $table_name";
            $result_columns = mysqli_query($conn, $sql_columns);
            while ($row_column = mysqli_fetch_assoc($result_columns)) {
              $column_name = $row_column['Field']; // Column name
              $data_type = $row_column['Type'];    // Data type of the column
              $length = "";  // Default to empty

              // If length information is available, extract it
              if (preg_match('/\((\d+)\)/', $data_type, $matches)) {
                  $length = $matches[1];  // Extract the length from the data type
              }

              // Display the table and its column details?>
              <i class="mdi mdi-yeast"></i>
              <?php
              echo "$column_name<br>";
          }
          ?>
          </td>
        </tr>
      <?php } }?>
    </tbody>
  </table>
</div>

<?php include '../../includes/tablepages.php'; ?>