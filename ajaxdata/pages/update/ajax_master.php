<?php include '../../../config/core.php';?>
<?php include '../../../config/database.php';?>
<?php include '../../../login_checker.php';?>
<?php 
    $newTableName=mysqli_real_escape_string($conn,$_POST['txtname_val1']);
    
    $oldTableName = mysqli_real_escape_string($conn,$_POST['tablenameold_val1']);
    $sqlij = "RENAME TABLE $oldTableName TO $newTableName";
  
     if (mysqli_query($conn, $sqlij)) {
        echo "Master Name Updated successfully";
    } else {
        echo "Error: " . $sqlij . "" . mysqli_error($conn);
    }

  
?>  