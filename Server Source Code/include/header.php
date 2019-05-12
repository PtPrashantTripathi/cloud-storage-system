<html>
	<head>
	<title>CloudBox</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="CloudBox" />
	<meta name="description" content="Pt. Prashant Triapthi Jabalpur (Madhya Pradesh), India.  " />
	<meta name="keywords" content="Pt. Prashant Tripathi ,CloudBox.ga,CloudBox,social networking ,Prashant Triapthi ,Pandit, Prashant Tripathi , St. Aloysius institute of technology , web developer, software engineer, Astrology, Personal website" />
	<meta name="author" content="Pt. Prashant Tripathi" />
	<meta name="language" content="English">
	<meta name="copyright" content="Pt. Prashant Tripathi © 2018 " />
	<meta name="robots" content="index, follow">
	<meta http-equiv="imagetoolbar" content="yes">
    <link rel="shortcut icon" href="/image/CloudBox.png">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	<link href="/assets/css/styles.css" rel="stylesheet">
</head>
<body>
<div class="header">
	<ul>
		<li><a href="/"><img src="/assets/img/CloudBox.png" style="height:42px;border:0;float:left;"/></a></li>	
		<?php if(isset($_SESSION["id"])) {?>
		<li style="float:right;"><a href="/logout.php"><i class="fa fa-power-off"></i>Logout</a></li>
		<li style="float:right;"><a href="/uplode.php"><i class="fa fa-upload"></i>Upload</a></li>
		<?php } else {?>
		<li style="float:right;"><a href="/login.php"><i class="fa fa-sign-in "></i> Login</a></li>
		<?php }?>
		</ul>
</div>
