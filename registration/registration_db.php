<?php


// 送信された値を受け取る
if (isset($_POST['name'])) {

    // 受け取った値を変数に入れる
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $care = htmlspecialchars($_POST['care'], ENT_QUOTES);
    $time = htmlspecialchars($_POST['time'], ENT_QUOTES);

    // データベース接続
    $dsn = "mysql:host=localhost;dbname=msystem;charset=utf8";
    $user="root";
    $pass="root";

    // 受け取った値をデータベースに保存する
    try {
        $db = new PDO($dsn, $user, $pass);
        $db->query("INSERT INTO users (name, care, time)
                    VALUES ('$name', '$care', '$time')");
                    echo 'ログインが成功しました';
    }catch (Exception $e) {
        echo $e->getMessage();
    }

    
}