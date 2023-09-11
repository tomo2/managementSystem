<?php
function getreservation (){

    $dsn = "mysql:host=localhost;dbname=msystem;charset=utf8";
    $user="root";
    $pass="root";
    $db = new PDO($dsn,$user,$pass);
    $ps = $db->query("SELECT * FROM mSystem");
    // 配列を用意
    $reservation_menber = [];

    foreach ($ps as $out) {
        // 全ての日付を文字列として格納
        $day_out = strtotime((string) $out['day']);
        // 予約された人数を文字列として格納
        $member_out = (string) $out['member'];
        // 予約された全ての日のそれぞれの人数を格納
        $reservation_menber[date('Y-m-d', $day_out)] = $member_out;
        // 日付を元に予約人数を格納
    }
    // 日付と人数を古い日付順位に並び替える
    ksort($reservation_menber);
    // 古い日付に並び替えたものを返す
    return $reservation_menber;
}


?>