<!DOCTYPE html>
<html>
<head>
	<title>IV Calculator API</title>
	<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
</head>
<body>
<?php
	if(!isset($_GET['name']) || !isset($_GET['cp']) || !isset($_GET['hp']) || !isset($_GET['dust'])) {
		header('Content-Type: text/plain');
		print("Please input correct parameters");
	}
	$name = $_GET['name'];
	$cp = $_GET['cp'];
	$hp = $_GET['hp'];
	$dust = $_GET['dust'];
	$poke_info = array(
		'name' => $name,
		'cp' => $cp,
		'hp' => $hp,
		'dust' => $dust);
	$data = $_GET['data1'];
	echo "<script>\n";
	echo "var properties= ". json_encode($poke_info).";";
	echo "</script>";
?>
	<script type="text/javascript" src="ivcal.js"></script>
<?php
	print($name.$cp.$hp.$dust.$data);
?>
</body>
</html>