<?php
$link = mysqli_connect('localhost', 'root', '');

if(!$link)
{
	$output = 'Unable to connect to the database server.';
	include 'output.html.php';
	exit();
}


//if (!mysqli_set_charset($link, 'utf-8'))
//{
//	$output = 'Unable to set database connection encoding.';
//	include 'output.html.php';
//	//exit();
//}

if (!mysqli_select_db($link,'workhours1'))
{
	$output = 'Could not find workhours database.';
	include 'output.html.php';
	exit();
}

$output = 'Database connection established.';
// include 'output.html.php';
?>