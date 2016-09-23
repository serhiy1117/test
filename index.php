<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css.css">
        <title>бібліотека</title>

    </head>
    <body>
        <div id="header">
            <img src="images/1.jpg" height="100" width = "1466">
        </div>
        <div id="left" >
            <ul>
            <li><a href="add.php">створити  книгу</a><br></li>
            <li><a href="add1.php">додати книгу</a><br></li>
            <li><a href="add2">посмотреть все книги</a><br></li>
            <li>1</li>
             <li>2</li>
              <li>2</li>
               <li>3</li>
                <li>4</li>
                 <li>5</li>
                  <li>6</li>
                   <li>7</li>
                    <li>8</li>
                     <li>9</li>
                      <li>10</li>
                      
            </ul>
        </div>
        <div id="content">
                       <?php
        include_once 'db.php';
       require_once 'data.php';
       foreach ($publications as $item){
          $item->printItem();
       }
        ?>
            </div>
        <div id="right">
        </div>
        </div>
        <div class="clear"></div>
        <div id="footer">Подвал</div>
     
    </body>
</html>
