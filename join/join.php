<?

$form = [];
$error = [];

$form['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_ADD_SLASHES);
if ($form['name'] === '') {
    $error['name'] = 'blank';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>利用者登録画面</title>
</head>
<body>

<h2>ユーザー登録を行う</h2>

    <form action="" method="post">
        <p>
            <label for="name">ユーザー名：</label>
            <input type="text" name="name">
            <?php if ($form['name'] === 'blank'): ?>
                <p class="error">名前を入力してください</p>
            <?php endif; ?>
            </p>
        <p>
            <label for="password">パスワード：</label>
            <input type="password" name="password">
        </p>
        <p>
            <label for="password_conf">パスワード確認</label>
            <input type="password" name="password_conf">
        </p>
        <p>
            <input type="submit" value="新規登録">
        </p>
    </form>
    
</body>
</html>