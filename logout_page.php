<?php include 'config/core.php';?>
<?php 
session_start();
if(isset($_SESSION["username"]))
{
	unset($_SESSION["username"]);
	unset($_SESSION["user_id"]);
	unset($_SESSION["userloginid"]);
	echo "<script>window.location='".$home_url."index';</script>";	

}
?>