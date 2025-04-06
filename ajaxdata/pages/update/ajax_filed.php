<?php include '../../../config/core.php';?>
<?php include '../../../config/database.php';?>
<?php include '../../../login_checker.php';?>
<?php
    $table_name=mysqli_real_escape_string($conn,$_POST['txttablename_val1']);
    $txtfiled1_val1=mysqli_real_escape_string($conn,$_POST['txtfiled1_val1']);
    $hidefiled1_val2=mysqli_real_escape_string($conn,$_POST['hidefiled1_val1']);
    $txtfiledtype1_val2=mysqli_real_escape_string($conn,$_POST['txttype1_val1']);

    if($txtfiledtype1_val2 == 'VARCHAR'){
        $txtfiledtype1_val3 = "VARCHAR(999)";
    }else{
        $txtfiledtype1_val3 = $txtfiledtype1_val2;
    }
    
    $sqlij = "ALTER TABLE `$table_name` CHANGE `$hidefiled1_val2` `$txtfiled1_val1` $txtfiledtype1_val3 NULL";
    if (mysqli_query($conn, $sqlij)) {
        echo "Table Filed Update successfully"; 
    } else {
        echo "Error: " . $sqlij . "" . mysqli_error($conn);
    }
?>

  