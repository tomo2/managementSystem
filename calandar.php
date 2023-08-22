<?php

// 今日の日付を取得
$year = date('Y');
$month = date('m');
$day = date('d');
$today = date('Ymd');

// 1日、月末、を取得 (タイムスタンプ)
$firstDay = (mktime(0,0,0,date('m'),1,date('Y')));
$lastDay = (mktime(0,0,0,date('m')+1,0,date('Y')));

// 月末日 (31等)
$last = date('d',mktime(0,0,0,date('m')+1,0,date('Y')));

// 曜日の準備
$week = ["日", '月', '火', '水', '木', '金', '土'];

// 1日、月末の曜日の取得
$firstWeek = date('w', $firstDay);
$lastWeek = date('w', $lastDay);

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
$numbers = array_merge($number, $oneMonth);

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
            <button name="next">先月へ</button>
                <h3><?php echo $year . '年' . $month . '月' ?></h3>
            <button name="prev">次月へ</button>
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