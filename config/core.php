<?php
// show error reporting
error_reporting(E_ALL);
 
// start php session
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
 
// set your default time-zone
date_default_timezone_set('Asia/Kolkata');
 
// home page url
$home_url="http://localhost:8888/crm/";

 
// // page given in URL parameter, default page is one
// $page = isset($_GET['page']) ? $_GET['page'] : 1;
 
// // set number of records per page
// $records_per_page = 5;
 
// // calculate for the query LIMIT clause
// $from_record_num = ($records_per_page * $page) - $records_per_page;
?>