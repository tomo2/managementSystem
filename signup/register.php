<?php

require_once 'UserLogin.php';

// エラー
$err = [];

// バリデーション
if (!$ = filter_input(INPUT_POST, 'username')) {
    $err[] = 'ユーザー名が記入されていません';
}
if (!$email = filter_input(INPUT_POST, 'email')) {
    $err[] = 'メールアドレスが記入されていません';
}
if (!$email = filter_input(INPUT_POST, 'password')) {
    $err[] = 'パスワードは英数字8文字以上100文字以内で記入してください';
}
if (!$email = filter_input(INPUT_POST, 'password_conf')) {
    $err[] = '確認用パスワードが間違っています';
}

if (conut($err) === 0) {
    // 値がある
    $hasCreated = UserLogin::createUser($_POST);

    // 値がない
    if (!$hasCreated) {
        $err[] = '登録に失敗しました';
    }
} 

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録が完了しました</title>
</head>
<body>
    <!-- $errに値が入っていれば -->
    <?php if (count($err) > 0) : ?>
        <?php foreach ($err as $e) : ?>
            <p><?php echo $e ?></p>
        <?php endforeach ?>
    <?php else : ?>
            <p>登録が完了しました</p>
    <? endif ?>
            <a href="./signup.php">戻る</a>

</body>
</html>

