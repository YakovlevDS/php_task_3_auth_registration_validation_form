<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=wayup', "root", "root");
} catch (\Exception $exception) {
    echo "Ошибка при подключении к БД<br>";
    echo $exception->getMessage();
    die();
}