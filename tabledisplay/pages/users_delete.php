<?php include '../../config/core.php';?>
<?php include '../../config/database.php';?>
<?php include '../../login_checker.php';?>
<?php
$sid = $_POST['sid'];
$sqlij = "UPDATE `tbl_users` SET `removedata`='1',`remocedatetime`='".date("Y-m-d h:i:sa")."',`performance`='".$_SESSION["userloginid"]."' WHERE `users_id`='".$sid."'";
if (mysqli_query($conn, $sqlij)) {
 echo "Record Delete successfully";
}

?>