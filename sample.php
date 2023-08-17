<?php

date_default_timezone_set('Asia/Tokyo');

$year = date('Y');
$month = date('m');

// 月末を取得 tは月末を取得する
$end_month = date('t', strtotime(($year.$month.'01')));
// 1日の曜日を取得
$first_week = date('w', strtotime($year.$month.'01'));
// 月末の曜日を取得
$last_week = date('w', strtotime($year.$month.$end_month));

$aryCalendar = [];
// 行？
$j = 0;

// 最初の曜日まで空の配列を作る
for ($i = 0; $i < $first_week; $i++) {
    $aryCalendar[$j][] = '';
}

// カレンダーの日にちを作成する
for ($i = 1; $i <= $end_month; $i++) {
    if (isset($aryCalendar[$j]) && count($aryCalendar[$j]) === 7) {
        $j++;
    }
    $aryCalendar[$j][] = $i;
}

// 月末の曜日
for ($i = count($aryCalendar[$j]); $i <7; $i++) {
    $aryCalendar[$j][] = '';
}

$aryWeek = ['日','月','火','水','木','金','土'];

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>カレンダー</title>
</head>
<body>

<table>
    <!-- 曜日の表示 -->
    <tr>
        <?php foreach ($aryWeek as $week) { ?>
            <th><?php echo $week; ?></th>
        <?php } ?>
    </tr>

    <!-- 日数の表示 -->
    <?php foreach ($aryCalendar as $tr) : ?>
        <tr>
            <?php foreach ($tr as $td) : ?>

                    <?php if ($td != date('j')) : ?>
                        <td><?php echo $td ?></td>
                    <?php else : ?>
                        <!-- 今日の日付 -->
                        <td class="today"><?php echo $td ?></td>
                    <?php endif; ?>

            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>