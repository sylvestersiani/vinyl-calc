<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo isset($title)? print $title : 'Calculate Vinyl cost'; ?></title>
		<link rel="stylesheet" type="text/css" href="css/">
	</head>
	<body>
	<?php
		include"nav.php";
	?>