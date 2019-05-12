<?php 
//destroing session
session_start();
session_unset(); 
session_destroy(); 
	
//unset coockies	
unset($_COOKIE['profileid']);
setcookie('profileid', null, -1, '/');
	
header("Location: /login.php?logout");

?>