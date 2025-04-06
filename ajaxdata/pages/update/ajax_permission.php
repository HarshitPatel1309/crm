<?php include '../../../config/core.php';?>
<?php include '../../../config/database.php';?>
<?php include '../../../login_checker.php';?>
<?php
    $txttablenames_val2=mysqli_real_escape_string($conn,$_POST['txttablenames_val1']);
    $txttablemenu_val2=mysqli_real_escape_string($conn,$_POST['txttablemenu_val1']);
    $txtshowhide_val2=mysqli_real_escape_string($conn,$_POST['txtshowhide_val1']);

    $sqlij = "UPDATE `tbl_showhide` SET `tablemenu`='".$txttablemenu_val2."',`showhide`='".$txtshowhide_val2."' WHERE `tablename`='".$txttablenames_val2."'";
    if (mysqli_query($conn, $sqlij)) {
        echo "Record Updated successfully";
    } else {
        echo "Error: " . $sqlij . "" . mysqli_error($conn);
    }
?>

  