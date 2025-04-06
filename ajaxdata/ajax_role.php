<?php include '../config/core.php';?>
<?php include '../config/database.php';?>
<?php include '../login_checker.php';?>
<?php 
$action2=mysqli_real_escape_string($conn,$_POST['action1']);

// INSERT DATA CODE START
	if($action2 == 'INSERTDATA'){
		$txtrolename_vals2=mysqli_real_escape_string($conn,$_POST['txtrolename_vals1']);
		$txtroleshortname_vals2=mysqli_real_escape_string($conn,$_POST['txtroleshortname_vals1']);

	  $sqlij = "insert into tbl_role values(NULL,'".$txtrolename_vals2."','".$txtroleshortname_vals2."','1','0','','".$_SESSION["userloginid"]."')";
	 	if (mysqli_query($conn, $sqlij)) {
	      echo "Role Insert successfully";
	  } else {
	     echo "Error: " . $sqlij . "" . mysqli_error($conn);
	  }
	}
// INSERT DATA CODE END

// UPDATE DATA CODE START
	if($action2 == 'UPDATEDATA'){
		$txtrolename_vals2=mysqli_real_escape_string($conn,$_POST['txtrolename_vals1']);
		$txtroleshortname_vals2=mysqli_real_escape_string($conn,$_POST['txtroleshortname_vals1']);
		$hiddenids_vals2=mysqli_real_escape_string($conn,$_POST['hiddenids_vals1']);

		$sqlij = "UPDATE `tbl_role` SET `role_name`='".$txtrolename_vals2."',`role_shortname`='".$txtroleshortname_vals2."' WHERE `role_id`='".$hiddenids_vals2."'";
		  
		if (mysqli_query($conn, $sqlij)) {
	     echo "Record Updated successfully";
	  } else {
	     echo "Error: " . $sqlij . "" . mysqli_error($conn);
	  }
	}
// UPDATE DATA CODE END	

// STATUS DATA CODE START
	if($action2 == 'STATUSDATA'){
		$data = $_POST['aci_id'];
		$data1 = $_POST['catids'];

		if($data==1){
		  mysqli_query($conn,"update tbl_role set status='0' where role_id='".$data1."'")or die(mysql.error());
		}else{
		  mysqli_query($conn,"update tbl_role set status='1' where role_id='".$data1."'")or die(mysql.error());
		}
	}
// STATUS DATA CODE END

	// DELETE DATA CODE START
	if($action2 == 'DELETEDATA'){
		$sid = $_POST['sid'];
		$sqlij = "UPDATE `tbl_role` SET `removedata`='1',`remocedatetime`='".date("Y-m-d h:i:sa")."',`performance`='".$_SESSION["userloginid"]."' WHERE `role_id`='".$sid."'";
		  
		if (mysqli_query($conn, $sqlij)) {
	     echo "Record Delete successfully";
	    }
		// mysqli_query($conn,"DELETE FROM tbl_role WHERE role_id='".$sid."'")or die(mysql.error());
	}
	// DELETE DATA CODE END
?>  