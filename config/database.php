<?php
   
   $dbhost = 'localhost:8889';
   $dbuser = 'root';
   $dbpass = 'root';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass );
   
  
  
   if(! $conn ) {
       
      die('Could not connect: ' . mysql_error());
   }
   $dbname = "crm";
   $select_db = mysqli_select_db($conn, $dbname);
	if (!$select_db){
	    die("Database Selection Failed" . mysqli_error($conn));
	}
