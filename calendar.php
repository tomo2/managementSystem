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
$lastNumbers = [];

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


    <div class="calendar">
<form action="" method="post">

        <h3 class="ym"><?php echo $year . '年' . $month . '月' ?></h3>

        <div class="monthBtns">
            <button type="submit" name="1" class="monthBtn">1月</button>
            <button type="submit" name="2" class="monthBtn">2月</button>
            <button type="submit" name="3" class="monthBtn">3月</button>
            <button type="submit" name="4" class="monthBtn">4月</button>
            <button type="submit" name="5" class="monthBtn">5月</button>
            <button type="submit" name="6" class="monthBtn">6月</button>
            <button type="submit" name="7" class="monthBtn">7月</button>
            <button type="submit" name="8" class="monthBtn">8月</button>
            <button type="submit" name="9" class="monthBtn">9月</button>
            <button type="submit" name="10" class="monthBtn">10月</button>
            <button type="submit" name="11" class="monthBtn">11月</button>
            <button type="submit" name="12" class="monthBtn">12月</button>
        </div>

    </form>



        <table class="numbers">
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
                    echo "<div class='$month.$key'>";
                    echo "<td>" . $key . '</td>';
                    echo "</div>";
                    if ($numbers1 % 7 == 6) {
                        echo '</tr>';
                    }
                }
                ?>
            </tr>

        </table>
    </div>
