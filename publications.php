<?php
header('Conter-Type: text/html; charser=utf-8');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>news</title>
    </head>
    <body>
        <?php
       require_once 'data.php';
       foreach ($publications as $item){
          $item->printItem();
           
       }
        ?>
    </body>
</html>
