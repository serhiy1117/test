<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>добавление книги</title>
    </head>
    <body>
        <form method="post" action="add.php">
            названия книги <input type="text" name="title"/><br>

            автор книги 
            <input type="text" name="author"/><br>
            описания книги<br>
            <textarea cols="40" name="discribe" rows="10"></textarea><br>
            укажите 
            <input type="date" name="date"/>;<br>
            

            <input type="submit" name="add" value="добавить"/>


            <?php
            include_once ('db.php');    
          
            if(isset($_POST['add']))
                {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $discribe = $_POST['discribe'];
        $date = $_POST['date'];
      
            
mysqli_query($con, "INSERT INTO libery (title, author, discribe, date) VALUES ('$title', '$author', '$discribe', '$date')");
                }
            ?>
            
        </form>
        
   
    </body>
</html>
