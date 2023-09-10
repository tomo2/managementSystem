<?php


// 送信された値を受け取る
if (isset($_POST['name'])) {

    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $care = htmlspecialchars($_POST['care'], ENT_QUOTES);
    $time = htmlspecialchars($_POST['time'], ENT_QUOTES);


    $dsn = "mysql:host=localhost;dbname=msystem;charset=utf8";
    $user="root";
    $pass="root";

    try {
        $db = new PDO($dsn, $user, $pass);
        $db->query("INSERT INTO msistem (name, care, time)
                    VALUES ('$name', '$care', '$time')");
    }catch (Exception $e) {
        echo $e->getMessage();
    }
}