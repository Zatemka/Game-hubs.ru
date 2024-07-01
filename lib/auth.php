<?php
$login = trim(filter_var($_POST['login']));
$password = trim(filter_var($_POST['password']));

if(strlen($login) < 3) {
    echo "Логин должен быть больше 3 символов";
    exit;
}

if(strlen($password) < 5) {
    echo "пороль должен быть больше 5 символов";
    exit;
}

//password
$salt = 'heating123';
$password = md5($salt.$password);

//DB
require  "db.php";

//Auth user
$sql = 'SELECT id FROM users WHERE login = ? AND password = ?';
$query = $pdo->prepare($sql);
$query->execute([$login , $password]);

if($query->rowCount() == 0)
    echo "Такого пользователя нет!";
else {
    setcookie('login', $login, time() + 3600 * 24 * 330, "/");
    header('Location: /user.php');
}
    