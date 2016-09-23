<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
</html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
include_once 'db.php';
 $qery = "SELECT * FROM libery";
$result=$con->query($qery);
$row=$result->fetch_array();
 while ($row = mysqli_fetch_assoc($result)){
      echo ($row['title']);
       echo "<br/>";
      echo '<a href="adit.php?id='.$row['id'].'">редактировать</a><br />';
      echo '<a href="delite.php?id='.$row['id'].'">удалить книгу</a><br />';
    echo "<br/>";
}


        ?>
    </body>
</html>
