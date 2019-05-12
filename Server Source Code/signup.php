<?php
include 'include/db_config.php';
include 'include/header.php';

if (isset($_POST['signup'])) {
	
 	$username = $_POST['username'];
	$password = $_POST['password'];
	$contactno = $_POST['contactno'];
	$gender = $_POST['gender'];
	$sql = mysql_query("SELECT * FROM profile WHERE contactno='$contactno'");
	$rows = mysql_num_rows($sql);
	if($rows==1){echo "<script>alert('Contect No. Already Exist');</script>";}
	else{		
	$query = mysql_query("INSERT INTO profile SET username='$username',password='$password',contactno='$contactno',gender='$gender' ");
	if($query){
		$result = mysql_query("SELECT profileid FROM profile WHERE contactno ='".$contactno."' AND password='".$password."'");
		$user = mysql_fetch_array($result);
		$_SESSION["id"] = $user['profileid'];
		//setcookie("profileid",$user['profileid'],time()+(86400*30),"/","",0);
		echo "<script>alert('Successful');</script>";
		header("Location: /?success");
		}
	else{
		echo "<script>alert('Somthing Missing !!!');</script>";
		header("Location: signup.php?error");
		}
	}	
}	
echo '
<div class="form"><center>
<form method="post" action="signup.php">
<input type="text" name="username" placeholder="User Name"/>
<input type="text" name="password" placeholder="Your Password"/>
<input type="text" name="contactno" placeholder="Mobile No"/>
<label style="color:white">Gender</label>
<input type="radio" name="gender" value="male" checked> Male
<input type="radio" name="gender" value="female"> Female
<center>
<button type="submit" name="signup">SIGNUP</button>
</form>
</div>
';
?>	