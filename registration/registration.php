<?php

if (isset($_POST['care'])) {
    echo $_POST['name'];
    echo $_POST['care'];
    echo $_POST['time'];
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>利用者登録ページ</title>
</head>
<body>

    <form action="./registration_db.php" method="post">
        お名前：<input type="text" name="name"><br>

    <ul class="list-group list-group-horizontal">
        <li class="list-group-item"><label><input type="radio" name="care" value="要介護1">要介護1<br></label></li>
        <li class="list-group-item"> <label><input type="radio" name="care" value="要介護2">要介護2<br></label></li>
        <li class="list-group-item"><label><input type="radio" name="care" value="要介護3">要介護3<br></label></li>
        <li class="list-group-item"><label><input type="radio" name="care" value="要介護4">要介護4<br></label></li>
        <li class="list-group-item"><label><input type="radio" name="care" value="要介護5">要介護5<br></label></li>
    </ul>

    <ul class="list-group list-group-horizontal">
        <li class="list-group-item"><label><input type="radio" name="time" value="3~4時間">3~4時間<br></label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="3~4時間">3~4時間<br></label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="3~4時間">3~4時間<br></label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="3~4時間">3~4時間<br></label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="3~4時間">3~4時間<br></label></li>
    </ul>
    
    <ul class="list-group list-group-horizontal">
        <li class="list-group-item"><label><input type="radio" name="time" value="4~5時間">4~5時間<br></label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="4~5時間">4~5時間<br></label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="4~5時間">4~5時間<br></label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="4~5時間">4~5時間<br></label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="4~5時間">4~5時間<br></label></li>
    </ul>
    <ul class="list-group list-group-horizontal">
        <li class="list-group-item"><label><input type="radio" name="time" value="5~6時間">5~6時間</label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="5~6時間">5~6時間</label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="5~6時間">5~6時間</label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="5~6時間">5~6時間</label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="5~6時間">5~6時間</label></li>
    </ul>
    <ul class="list-group list-group-horizontal">
        <li class="list-group-item"><label><input type="radio" name="time" value="6~7時間">6~7時間</label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="6~7時間">6~7時間</label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="6~7時間">6~7時間</label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="6~7時間">6~7時間</label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="6~7時間">6~7時間</label></li>
    </ul>
    <ul class="list-group list-group-horizontal">
        <li class="list-group-item"><label><input type="radio" name="time" value="7~8時間">7~8時間</label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="7~8時間">7~8時間</label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="7~8時間">7~8時間</label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="7~8時間">7~8時間</label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="7~8時間">7~8時間</label></li>
    </ul>
    <ul class="list-group list-group-horizontal">
        <li class="list-group-item"><label><input type="radio" name="time" value="8~9時間">8~9時間</label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="8~9時間">8~9時間</label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="8~9時間">8~9時間</label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="8~9時間">8~9時間</label></li>
        <li class="list-group-item"><label><input type="radio" name="time" value="8~9時間">8~9時間</label></li>
    </ul>

        <button type="submit">送信する</button>
    </form>
    
</body>
</html>