<?php 
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	
	$db = 'test';
	
	$conn = mysql_connect($dbhost,$dbuser,$dbpass);
	mysql_select_db($db);
?>