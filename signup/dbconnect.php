<?php

$host = "localhost";
$db = "データベース名を入れる";
$user = "root";
$pass = "root";

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";


try {
    
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    echo '接続成功です';
    return $pdo;

} catch (PDOException $e) {
    echo '接続失敗です！' . $e->getMessage();
    exit();
}