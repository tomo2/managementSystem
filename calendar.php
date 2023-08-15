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

// 月末を取得
$lastDay = date('j', mktime(0, 0, 0, $month + 1, 0, $year));
$calendar = array();
$j = 0;

// 月末までループ、日付を$calendarの配列に入れる
for ($i = 1; $i < $lastDay + 1; $i++) {
    // 曜日を取得
    $week = date('w', mktime(0, 0, 0, $month, $i, $year));

    if ($i == 1) {
        // 最初の曜日に移動
        for ($s = 1; $s < $week; $s++) {
            $calendar[$j]['day'] = '';
            $j++;
        }
    }

    // 配列を日付にセット
    $calendar[$j]['day'] = $i;
    $j++;

    // 月末の場合
    if ($i == $lastDay) {
        for ($e = 1; $e <= 6 - $week; $e++) {
            // 後半空文字をセット
            $calendar[$j]['day'] = '';
            $j++;
        }
    }

}
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
    <table>
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tfoot>
    </table>
    
</body>
</html>