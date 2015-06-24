<?php 
	include 'connection.php';
	
	$name = $_POST['inputProjectName'];
	$desc = $_POST['inputProjectDescription'];
	
	if(!$_POST['submit']) {
		echo "Please fill in the form";
		header('Location: ../dashboard.php');
	} else {
		mysql_query("INSERT INTO project_list (`ID`,`Name`,`Description`)
					VALUES (NULL, '$name','$desc')") or die(mysql_error());
		echo "Project has been added";
		header('Location: ../dashboard.php');
	}
?>