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
            include_once ('db.php');  
            
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $qery = "SELECT id, title, author, discribe, date FROM libery WHERE id='$id'";
                $result=$con->query($qery);
                $row=$result->fetch_array();
            }


                if(isset($_POST['save'])){
                    $id = $_POST['id'];                   
                                        
                    $title = $_POST['title'];
        $author = $_POST['author'];
        $discribe = $_POST['discribe'];
        $date = $_POST['date'];
        mysqli_query($con, "UPDATE libery SET title='$title', author='$author', discribe='$discribe' WHERE id='$id'");
              echo 'информация успешно обновлена';
             
                }
            ?>
          <form method="post" action="adit.php">
              названия книги <input type="text" name="title" value="<?php echo (isset($row['title'])) ? $row['title']: null ?>"/><br>

            автор книги 
            <input type="text" name="author" value="<?php echo (isset($row['author'])) ? $row['author']: null ?>"/><br>
            описания книги<br>
            <input type="hidden" name="id" value="<?php echo (isset($row['id'])) ? $row['id']: null; ?>"/>
            <textarea cols="40" name="discribe" rows="10"><?php echo (isset($row['discribe'])) ? $row['discribe']: null ?></textarea><br>
            укажите 
            <input type="date" name="date" />;<br>
            

            <input type="submit" name="save" value="редактировать"/>



        </form>
   </body>
</html>
