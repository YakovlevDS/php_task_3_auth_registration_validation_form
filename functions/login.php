<?php

function fetchUserByEmail(object $dbh, string $email)
{
    $sql = "SELECT * FROM `users` WHERE `email` = :email";
    $params = ["email" => $email];

    $fetchUser = $dbh->prepare($sql);
    $fetchUser->execute($params);
    return $fetchUser->fetch(PDO::FETCH_ASSOC);
}