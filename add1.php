<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>добавить книгу</title>
    </head>
    <body>

        <form method="post" action="add1.php">
            названия автора <input type="text" name="author"/><br>

            названия книги
            <input type="text" name="name"/><br>
            описания книги<br>
            <textarea cols="40" name="text" rows="10"></textarea><br>
            укажите 
            <input type="date" name="date"/>;<br>
            

            <input type="submit" name="add" value="добавить"/>


            <?php
            include_once ('db.php');

            if (isset($_POST['add'])) {
                $author = $_POST['title'];
                $name = $_POST['author'];
                $text = $_POST['discribe'];
                $date = $_POST['date'];


                mysqli_query($con, "INSERT INTO libery (title, author, discribe, date) VALUES ('$title', '$author', '$discribe', '$date')");
            }
            ?>

        </form>
    </body>
</html>
