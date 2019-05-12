<?php
if(!isset($_SESSION["id"])) {     
	//$_SESSION["id"]='1';
header("Location: /login.php?session_expired"); 
}
?>