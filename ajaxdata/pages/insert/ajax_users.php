<?php include '../../../config/core.php';?>
<?php include '../../../config/database.php';?>
<?php include '../../../login_checker.php';?>
<?php
    $txtfullname_val2=mysqli_real_escape_string($conn,$_POST['txtfullname_val1']);
    $txtemail_val2=mysqli_real_escape_string($conn,$_POST['txtemail_val1']);
    $txtphone_val2=mysqli_real_escape_string($conn,$_POST['txtphone_val1']);
    $txtuserid_val2=mysqli_real_escape_string($conn,$_POST['txtuserid_val1']);
    $txtpassword_val2=mysqli_real_escape_string($conn,$_POST['txtpassword_val1']);
    $txtrole_val2=mysqli_real_escape_string($conn,$_POST['txtrole_val1']);
    $txtaddress_val2=mysqli_real_escape_string($conn,$_POST['txtaddress_val1']);

    $sqlij = "insert into tbl_users values(NULL,'".$txtfullname_val2."','".$txtemail_val2."','".$txtphone_val2."','".$txtuserid_val2."','".$txtpassword_val2."','".$txtrole_val2."','".$txtaddress_val2."','1','0','','".$_SESSION["userloginid"]."')";
    if (mysqli_query($conn, $sqlij)) {
        echo "Users Insert successfully"; 
    } else {
        echo "Error: " . $sqlij . "" . mysqli_error($conn);
    }
?>

  