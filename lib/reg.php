<?php
    $login = trim(filter_var($_POST['login']));
    $username = trim(filter_var($_POST['username'] ));
    $email = trim(filter_var($_POST['email'] ));
    $password = trim(filter_var($_POST['password'] ));
    
if(strlen($login) < 3) {
    echo "Логин должен быть больше 3 символов";
    exit;
}
if(strlen($username) < 3) {
    echo "имя должено быть больше 3 символов";
    exit;
}
if(strlen($email) < 9) {
    echo "email должен быть больше 9 символов или @";
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

//INSERT
$sql = 'INSERT INTO users(login, username, email, password) VALUES(?, ?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$login, $username, $email, $password]);

header('location:/');
?>