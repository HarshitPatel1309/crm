<?php include '../../../config/core.php';?>
<?php include '../../../config/database.php';?>
<?php include '../../../login_checker.php';?>
<?php
    $txtname_val1=mysqli_real_escape_string($conn,$_POST['txtname_val1']);
    $name = "tbl_".$txtname_val1;
    $nametable = str_replace(" ","_",$name);
    $sqlij = "CREATE TABLE IF NOT EXISTS `$nametable` (id INT AUTO_INCREMENT PRIMARY KEY)";
    
    if (mysqli_query($conn, $sqlij)) {
        echo "Master Create successfully"; 
    } else {
        echo "Error: " . $sqlij . "" . mysqli_error($conn);
    }
?>

  