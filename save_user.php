<?php
if (isset($_POST['login'])){
    $login = $_POST['login']; 
    if ($login == ""){
    unset($login);
}}
if (isset($_POST['password']))
    { $password=$_POST['password'];
    if ($password =='') { unset($password);} }
if (empty($login) or empty($password)){
    exit("вы не ввели всю информацию, вернитесь назад и заполнете все поля");
}
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
$login = trim($login);
$password = trim($password);
include_once 'db.php';
$qery = "SELECT id FROM users WHERE login='$login'";
                $result=$con->query($qery);
                $row=$result->fetch_array();
 if (!empty($row['id'])){
     exit ("извените такой логин уже существует. Введите другой логин");
 }
 if (isset($_POST['submit'])){
 $result2 = mysqli_query($con, "INSERT INTO users (login, password) VALUES ('$login', '$password')");
if ($result2 == TRUE){
    echo "Вы успешно зарегистрирувались. Теперь можете зайти на сайт. <a href='index.php'>Главная страница</a>";
} else {
echo "Ошыбка! Вы не зарегистрированы.";    
}
 }
?>