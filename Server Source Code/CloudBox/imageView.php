<?php
include '/include/header.php';
?>
<div class="timeline">
	<h3> 
		<strong><a><?php echo $_GET['file'];?></a></strong>
		<a href="whatsapp://send?text=http://<?php echo $_SERVER['HTTP_HOST'];?>/imageView.php?<?php echo "id=".$_GET['id']."&file=".$_GET['file']; ?>" style="float:right;"><i class="fa fa-share"></i>Share</a>
		<a href="download.php?image_id=<?php echo $_GET['id']; ?>" style="float:right;"><i class="fa fa-download"></i>Downlode</a>
	</h3>	
		<img src="image.php?image_id=<?php echo $_GET['id']; ?>"/>
</div>
