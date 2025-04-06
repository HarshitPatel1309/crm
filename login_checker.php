<?php
// login checker for 'customer' access level
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(!isset($_SESSION["username"]))
{
	echo "<script>window.location='index.php';</script>";	
}
// if access level was not 'Admin', redirect him to login page
// $your_ip_address='127.0.0.1'; //change it to yours
// if (!isset($_SERVER['REMOTE_ADDR']) || $_SERVER['REMOTE_ADDR'] != $your_ip_address) {
//    // exit();
//     header("Location: https://www.google.co.in/"); 
// }
?>