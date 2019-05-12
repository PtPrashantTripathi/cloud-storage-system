<?php 
include 'include/db_config.php';
include 'include/header.php';

if(isset($_POST["login"])){
	$contectno = $_POST["contectno"];
	$password = $_POST["password"];	
	$sql = mysql_query("SELECT * FROM profile WHERE contactno ='$contectno' and password='$password'");
	$rows = mysql_num_rows($sql);
	if($rows==1) {
		$user = mysql_fetch_array($sql);
		$_SESSION["id"] = $user['profileid'];
		//setcookie("profileid",$user['profileid'],time()+(86400*30),"/","",0);
		header("Location: index.php?success");
		}
	else{
		echo "<script>alert('Password does not Match !!!');</script>";
		}
}

echo '
<div class="form">
<form method="post">
<input name="contectno" placeholder="Mobile No" type="text">
<input name="password" placeholder="Password" type="password">
<button type="submit" name="login">LOGIN</button>
<center>
  <a class="create" href="signup.php">Create New Account</a>
  </center></form>
</div>
';
?>	