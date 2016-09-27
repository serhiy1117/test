<?php
session_start();
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
$qery = "SELECT * FROM users WHERE login='$login'";
                $result=$con->query($qery);
                $row=$result->fetch_array();

if (empty($row['password']))
    {
    //если пользователя с введенным логином не существует
    exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {
    //если существует, то сверяем пароли
    if ($row['password']==$password) {
    //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
    $_SESSION['login']=$row['login']; 
    $_SESSION['id']=$row['id'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
    echo "Вы успешно вошли на сайт! <a href='index.php'>Главная страница</a>";
    }
 else {
    //если пароли не сошлись

    exit ("Извините, введённый вами login или пароль неверный.");
    }
    }