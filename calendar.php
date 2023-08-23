<?php

date_default_timezone_set('Asia/Tokyo');

// 今日の日付を取得
$year = date('Y');
$month = date('m');
$day = date('d');
$today = date('Ymd');

// 先月、来月のタイムスタンプを取得
// $prevMonth = (mktime(0, 0, 0, $month - 1, 1, $year));
// $nextMonth = (mktime(0, 0, 0, $month + 1, 1, $year));

if (isset($_POST['1'])) {
    $month = 1;
}
if (isset($_POST['2'])) {
    $month = 2;
}
if (isset($_POST['3'])) {
    $month = 3;
}
if (isset($_POST['4'])) {
    $month = 4;
}
if (isset($_POST['5'])) {
    $month = 5;
}
if (isset($_POST['6'])) {
    $month = 6;
}
if (isset($_POST['7'])) {
    $month = 7;
}
if (isset($_POST['8'])) {
    $month = 8;
}
if (isset($_POST['9'])) {
    $month = 9;
}
if (isset($_POST['10'])) {
    $month = 10;
}
if (isset($_POST['11'])) {
    $month = 11;
}
if (isset($_POST['12'])) {
    $month = 12;
}

// 1日、月末、を取得 (タイムスタンプ)
$firstDay = (mktime(0, 0, 0, $month, 1, $year));
$lastDay = (mktime(0, 0, 0, $month + 1, 0, $year));

// 1日、月末の曜日の取得
$firstWeek = date('w', $firstDay);
$lastWeek = date('w', $lastDay);

// 月末日 (31等)
$last = date('d',mktime(0, 0, 0, $month + 1, 0, $year));

// 曜日の準備
$week = ["日", '月', '火', '水', '木', '金', '土'];


// 空の配列の準備
$nunbers = [];

// 1日までの空白を作成する
for ($i = 1; $i <= $firstWeek; $i++) {
    $number[] = "";
}

// 一ヶ月の数字を代入
for ($i = 1; $i <= $last; $i++) {
    $oneMonth[] = $i;
}

// $numbersに空白、日数を連結して代入
if (isset($number)) {
    $numbers = array_merge($number, $oneMonth);
} else {
    $numbers = [...$oneMonth];
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カレンダー</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="calendar">
<form action="" method="post">
        <!-- <button type="submit" name="prev">先月へ</button>
            
        <button type="submit" name="next">次月へ</button> -->

        <h3><?php echo $year . '年' . $month . '月' ?></h3>
        <button type="submit" name="1">1月</button>
        <button type="submit" name="2">2月</button>
        <button type="submit" name="3">3月</button>
        <button type="submit" name="4">4月</button>
        <button type="submit" name="5">5月</button>
        <button type="submit" name="6">6月</button>
        <button type="submit" name="7">7月</button>
        <button type="submit" name="8">8月</button>
        <button type="submit" name="9">9月</button>
        <button type="submit" name="10">10月</button>
        <button type="submit" name="11">11月</button>
        <button type="submit" name="12">12月</button>

    </form>



        <table class="table table-bordered">
            <tr class="day">
            <!-- 曜日の表示 -->
            <?php
            foreach ($week as $weeks) {
                echo '<th>' . $weeks . '</th>';
            }
            ?>
            </tr>
        
            <tr>
            <!-- 月末までの数字の繰り返し -->
            <?php
                foreach ($numbers as $numbers1 => $key) {
                    echo'<td>' . $key . '</td>';

                    if ($numbers1 % 7 == 6) {
                        echo '</tr>';
                    }
                }
                ?>
            </tr>

        </table>
    </div>
</body>
</html>