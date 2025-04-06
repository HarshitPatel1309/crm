<?php include '../../../config/core.php';?>
<?php include '../../../config/database.php';?>
<?php include '../../../login_checker.php';?>
<?php
    $txttablenames_val2=mysqli_real_escape_string($conn,$_POST['txttablenames_val1']);
    $txttablemenu_val2=mysqli_real_escape_string($conn,$_POST['txttablemenu_val1']);
    echo $txtshowhide_val2=mysqli_real_escape_string($conn,$_POST['txtshowhide_val1']);

    $sqlij = "insert into tbl_showhide values(NULL,'".$txttablenames_val2."','".$txttablemenu_val2."','".$txtshowhide_val2."')";
    if (mysqli_query($conn, $sqlij)) {
        echo "Users Insert successfully"; 
    } else {
        echo "Error: " . $sqlij . "" . mysqli_error($conn);
    }
?>

  