<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		
		.kotak{
			margin:2px;
			line-height: 30px;
			width: 30px;
			height: 30px;
			border: 1px solid #000;
			float: left;
			text-align: center;
		}

		.clear {
			clear: both;
		}


	</style>
</head>
<body>
	<?php

	$a = "A";
	$b = "B";
	$c = "C";
	?>

	<!-- baris 1 -->

	<div class="kotak"><?php
	echo $a; ?></div>
	<div class="clear"></div>


	<!-- baris 2 -->

	<div class="kotak"><?php
	echo $a; ?></div>
	<div class="kotak"><?php
	echo $b; ?></div>
	<div class="clear"></div>


	<!-- baris 3 -->

	<div class="kotak"><?php
	echo $a; ?></div>
	<div class="kotak"><?php
	echo $b; ?></div>
    <div class="kotak"><?php
	echo $c; ?></div>
	<div class="clear"></div>

</body>
</html>

