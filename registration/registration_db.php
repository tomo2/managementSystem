<?php


// 送信された値を受け取る
if (isset($_POST['name'])) {

    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $care = htmlspecialchars($_POST['care'], ENT_QUOTES);
    $time = htmlspecialchars($_POST['time'], ENT_QUOTES);

}