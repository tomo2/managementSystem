<?php

// 今日の日付を取得
$year = date('Y');
$month = date('m');
$day = date('d');
$today = date('Ymd');

// 1日、月末、を取得 (タイムスタンプ)
// $firstDay = date('Ymd',mktime(0,0,0,date('m'),1,date('Y')));
$firstDay = (mktime(0,0,0,date('m'),1,date('Y')));
// $lastDay = date('Ymd',mktime(0,0,0,date('m')+1,0,date('Y')));
$lastDay = (mktime(0,0,0,date('m')+1,0,date('Y')));

// 月末日 (31等)
$last = date('d',mktime(0,0,0,date('m')+1,0,date('Y')));

// 曜日の準備
$week = ["日", '月', '火', '水', '木', '金', '土'];

// 1日、月末の曜日の取得
$firstWeek = date('w', $firstDay);
$lastWeek = date('w', $lastDay);


// $oneWeek = mktime()

// 空の配列の準備
$nunbers = [];

// 1日までの空白を作成する
for ($i = 1; $i <= $firstWeek; $i++) {
    $number[] = $i;
}

// 一ヶ月の数字を代入
for ($i = 1; $i <= $last; $i++) {
    $oneMonth[] = $i;
}

// $numbersに空白、日数を代入
$numbers[] = array_merge($number, $oneMonth);

echo '<pre>';
var_dump($numbers);
echo '</pre>';







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
        <a href="#">次月へ</a>
        <h3>2023.8</h3>
        <a href="#">先月へ</a>
        <table class="table table-bordered">
            <tr class="day">

            <?php
            foreach ($week as $weeks) {
                echo '<th>' . $weeks . '</th>';
            }
            ?>
            </tr>
        
            <tr>

            <!-- 月末までの数字の繰り返し -->
            <?php
            
                // カレンダーの呼び出し
                foreach ($oneMonth as $oneMonths) {
                    
                    echo'<td>' . $oneMonths . '</td>';
                    if ($oneMonths % 7 == 6) {
                        echo '</tr>';
                    }

                    
                }
                ?>
            </tr>

        </table>
    </div>
</body>
</html>