<!DOCTYPE html>
<!--Redundant and unused file-->

<body>

<?php 
	include 'secure/connection.php';
	
	$query = "SELECT * FROM project_list";
	
	$result = mysql_query($query);
	
	while($project = mysql_fetch_array($result)) {
		echo "<h3>" . $project['Name'] . "</h3>";
		echo "<p>" . $project['Description'] . "</p>";
	}
	
?>

<h1>Create a Project entry</h1>
<form action="secure/create.php" method="post"> 
	Project Name<input type="text" name="inputProjectName" value="" /><br />
	Projec Description<input type= "text" name="inputProjectDescription" value="" /><br />
	<br />
	<input type="submit" name="submit" />
</form>

</body>
</html>