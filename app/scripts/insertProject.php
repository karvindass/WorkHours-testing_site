<?php

include 'connectdb.php';

if (isset($_POST['submit']))
{
$title = $_POST['title'];
$clientid = $_POST['clientid'];
$start = $_POST['startdate'];
$sumhours = $_POST['workhours'];

$posting = 'INSERT INTO projects (title,clientid,sumwh)
        VALUES ($title,$clientid,$sumhours)';
myqsli_query($link, $sql);

}

//include toast icon that appears at the bottom of the screen

?>