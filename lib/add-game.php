<?php
$image = trim(filter_var($_POST['image']));
$followers = trim(filter_var($_POST['followers']));

if(strlen($image) < 3) {
    echo "Ошшибка изображения";
    exit;
}

if(strlen($followers) < 1) {
    echo "Ошибка в подписчиках";
    exit;
}

//DB
require "db.php";

//SQL
$sql = 'INSERT INTO trending(image, followers) VALUES(?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$image, $followers]);

header('location: /tredning.php');

