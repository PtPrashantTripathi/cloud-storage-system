<?php
	$file_name = 'cloudbox.png';
    $file_url = 'http://localhost/image.php?image_id='.$_GET['image_id'];
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary"); 
    header("Content-disposition: attachment; filename=\"".$file_name."\""); 
    echo file_get_contents($file_url);
?>