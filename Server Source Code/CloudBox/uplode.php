<?php
include '/include/db_config.php';
include '/include/header.php';
include 'include/session_config.php';
if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
    $imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
	$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
	mysql_query("INSERT INTO output_images(imgname,imageType ,imageData,time)
	VALUES('". basename($_FILES['userImage']['name'])."','".$imageProperties['mime']."', '".$imgData."', 'CURRENT_TIMESTAMP()')");
	header("Location: index.php");
}
}
?>

<center>
	<form name="frmImage" enctype="multipart/form-data" action="" method="post" class="frmImageUpload">
<label>Upload Image File:</label><br/>
<input name="userImage" type="file" class="inputFile" />
<input type="submit" value="Submit" class="btnSubmit" />
</form>
</center>