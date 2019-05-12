<?php
include '../include/db_config.php';
include '../include/header.php';
?>
<div class="search">
<ul>
<?php
$result = mysql_query("SELECT * FROM profile");
while($row = mysql_fetch_array($result)) {
  echo '<li>
			<a href="profile.php?id='.$row['profileid'].'">
			<img src="assets/img/user.png" width="96" height="96">
			'.$row['username'].'
			</a>
		</li>';
}

?>
</ul>
</div>