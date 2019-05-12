<?php
//session_start 
session_start();
//default timezone 
date_default_timezone_set("asia/calcutta");
// Mysql database settings
$user		= "root";
$password	= "usbw";
$database	= "cloud";
$host		= "localhost";
/*
$user		= "b7_2****1";
$password	= "b7_2****1";
$database	= "b7_2****1_cloudbox";
$host		= "***.byethost.com";
*/
mysql_connect($host,$user,$password);
mysql_select_db($database) or die( "Unable to select database");
?>