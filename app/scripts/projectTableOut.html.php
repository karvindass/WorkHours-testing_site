<?php 

?>

<!DOCTYPE html>
<html>
    <head>
        <title>TablePrintOut</title>
        <style type="text/css">
            table {
                border-collapse: collapse;
            }
            td, th {
                border: 1px solid black;
                padding: 5px;
            }
            th {
                font-weight: bold; 
           }
        </style>
    </head>
    <body>
        <blockquote>
        <p> Your <?php echo count($projects); ?> most recent projects are</p>
        <table border="1" width="90%">
            <thead>
                <tr>
                    <th>Project Description</th>
                    <th>Deadline</th>
                    <th>Client</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($projectstab as $project): ?>
                <tr>
                    <td><?php 
                    echo $project['title']; 
                    ?>
                    </td>
                    <td style="width:90px"><?php
                    echo $project['enddate']; ?>
                    </td>
                    <td style="width:60px">
                    <?php $project['client']; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </blockquote>
    </body>
</html>