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
    $informationeditid=mysqli_real_escape_string($conn,$_POST['informationeditid']);
  
    $sqlij = "UPDATE `tbl_users` SET `users_name`='".$txtfullname_val2."',`users_email`='".$txtemail_val2."', `users_phoneno`='".$txtphone_val2."', `userslogin_id`='".$txtuserid_val2."', `users_password`='".$txtpassword_val2."', `role_id`='".$txtrole_val2."', `useraddress`='".$txtaddress_val2."' WHERE `users_id`='".$informationeditid."'";
    if (mysqli_query($conn, $sqlij)) {
        echo "Record Updated successfully";
    } else {
        echo "Error: " . $sqlij . "" . mysqli_error($conn);
    }

  
?>  