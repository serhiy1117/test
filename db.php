<?php
//connect to database 
$con = mysqli_connect("localhost", "root", "", "books");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: ".mysqli_connect_error();
}
//make query
$result = mysqli_query($con,"SET NAMES utf8" );



