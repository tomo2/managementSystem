<?php

if (isset($_POST['care'])) {
    echo $_POST['care'];
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>利用者登録ページ</title>
</head>
<body>

    <form action="" method="post">
        お名前：<input type="text" name="name"><br>

        ・度合い<br>
                <label><input type="radio" name="care" value="3-4">要介護1<br></label>
                <label><input type="radio" name="care">要介護2<br></label>
                <label><input type="radio" name="care">要介護3<br></label>
                <label><input type="radio" name="care">要介護4<br></label>
                <label><input type="radio" name="care">要介護5<br></label>
                
                ・時間<br>
                <label><input type="radio" name="time">3~4時間<br></label>
                <label><input type="radio" name="time">4~5時間<br></label>
                <label><input type="radio" name="time">5~6時間<br></label>
                <label><input type="radio" name="time">6~7時間<br></label>
                <label><input type="radio" name="time">7~8時間<br></label>
                <label><input type="radio" name="time">8~9時間<br></label>

                <button type="submit">送信する</button>
    </form>
    
</body>
</html>