<?php
function str2html(string $string) :string{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

function db_open(){
    $user = "root";
    $password = "root";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
    ];
    $dbh = new PDO('mysql:host=localhost;port=8889;dbname=mydb;charset=utf8mb4', $user, $password, $opt);
    return $dbh;
}