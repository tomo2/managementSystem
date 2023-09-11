<?php
function getreservation (){

    $dsn = "mysql:host=localhost;dbname=msystem;charset=utf8";
    $user="root";
    $pass="root";
    $db = new PDO($dsn,$user,$pass);
    $ps = $db->query("SELECT * FROM mSystem");
    $reservation_menber = [];

    foreach ($ps as $out) {

        $day_out = strtotime((string) $out['day']);

        $member_out = (string) $out['member'];

        $reservation_menber[date('Y-m-d', $day_out)] = $member_out;
    }
}


?>