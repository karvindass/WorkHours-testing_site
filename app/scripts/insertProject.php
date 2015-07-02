<?php

include 'connectdb.php';

echo '<br>Not submit: ' . (!isset($_POST['submit']));
if (true) {
    echo '<br>';
    $title = $_POST['title'];
    $clientid = $_POST['clientid'];
    $start = $_POST['startdate'];
    $sumhours = $_POST['workhours'];

    $posting = "INSERT INTO projects (title,clientid,sumwh)
        VALUES ('" . $title . "','" . $clientid . "'," . $sumhours . ")";
    echo $posting;
    mysqli_query($link, $posting);
}

//include toast icon that appears at the bottom of the screen
?>