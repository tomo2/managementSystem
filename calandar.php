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

// 空の配列の準備
$nunber = '';
$nunbers = [];

// 1日までの空白を作成する
$number = str_repeat('<td></td>', $firstWeek);

$oneMonth[] = $number;

for ($i = 1; $i <= $last; $i++) {
    $oneMonth[] = '<td>' . $i . '</td>';
}

// $numbersに空白、日数を代入
$numbers[] =  $number;
$numbers[] = $oneMonth;

var_dump($numbers);

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
                <th>日</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
            </tr>
        
            <tr>
            <!-- 月末までの数字の繰り返し -->
            <?php
            // カレンダーの最初の空白
                // if(isset($number)) {
                // echo $number;
                // }

            // カレンダーの数字の繰り返し
                // for ($i = 1; $i <= $last; $i++) {
                // echo '<td>' . $i . '</td>';
                // }


                foreach ($oneMonth as $oneMonths) {
                    echo $oneMonths;
                }

            ?>
                <td>1</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                
            </tr>
            <tr>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
            </tr>
            <tr>
                <td>13</td>
                <td>14</td>
                <td>15</td>
                <td>16</td>
                <td>17</td>
                <td>18</td>
                <td>19</td>
                
            </tr>
            <tr>
                <td>20</td>
                <td>21</td>
                <td>22</td>
                <td>23</td>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                
            </tr>
            <tr>
                <td>27</td>
                <td>28</td>
                <td>29</td>
                <td>30</td>
                <td>31</td>
                <td></td>

        </table>
    </div>
</body>
</html>