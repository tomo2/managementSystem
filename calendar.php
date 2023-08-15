<?php
// タイムゾーンの設定
date_default_timezone_set('Asia/Tokyo');

$today = filter_input(INPUT_POST, 'today');
$monthNext = filter_input(INPUT_POST, 'monthNext');
$yearNext = filter_input(INPUT_POST, 'yearNext');
$manthPrev = filter_input(INPUT_POST, 'monthPrev');
$yearPrev = filter_input(INPUT_POST, 'yearPrev');


if ($today == 1) {
    // 現在の年月
    $month = date('n');
    $year = date('Y');
}
if ($monthNext > 12) {
    // 12月の次は次の年の１月になる
    $monthNext = 1;
    $yearNext++;
}
if ($monthPrev === "0") {
    // 1月の前は前の年の12月になる
    $monthPrev = 12;
    $yearPrev--;
}

// 順番に値があるか確認していく
$month = $monthNext??$manthPrev??date('n');
$year = $yearNext??$yearPrev??date('Y');


?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カレンダー</title>
</head>
<body>
    
</body>
</html>