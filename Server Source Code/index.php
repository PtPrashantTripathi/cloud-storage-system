<?php
    include '/include/db_config.php';
    include '/include/session_config.php';
    include '/include/header.php';
?>
<div class="filemanager">
	<ul class="data animated" style="">
<?php 
	$sql = "SELECT *,OCTET_LENGTH(imageData) as size FROM output_images where userid='".$_SESSION["id"]."' ORDER BY imageId DESC"; 
    $result = mysql_query($sql);
	while($row = mysql_fetch_array($result)) {
	$ext=preg_replace('/^[a-zA-Z]+\//m','',$row["imageType"]);
	?>
	<li class="files">
				<a href="imageView.php?id=<?php echo $row["imageId"].'&file='.$row["imgname"]; ?>" class="files">
					<span class="icon file f-<?php echo $ext; ?>"><?php echo $ext; ?></span>
					<span class="name"><?php echo $row["imgname"]; ?></span> 
					<span class="details"><?php echo (int)($row["size"]/1024).' KB'; ?></span>
				</a>
	</li>	
<?php		
	}
?>
			
		</ul>
	</div>
