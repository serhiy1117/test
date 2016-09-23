<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       include_once 'db.php';
       $id = $_GET['id'];
       $query = ("DELETE FROM libery WHERE id='$id'");
       mysqli_query($con, $query);
       echo "новость успешно удалена";
        ?>
    </body>
</html>
