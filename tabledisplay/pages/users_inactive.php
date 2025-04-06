<?php include '../../config/core.php';?>
<?php include '../../config/database.php';?>
<?php include '../../login_checker.php';?>
<?php
$data = $_POST['aci_id'];
$data1 = $_POST['catids'];

if($data==1){
  mysqli_query($conn,"update tbl_users set status='0' where users_id='".$data1."'")or die(mysql.error());
}else{
  mysqli_query($conn,"update tbl_users set status='1' where users_id='".$data1."'")or die(mysql.error());
}
?>