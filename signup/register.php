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

