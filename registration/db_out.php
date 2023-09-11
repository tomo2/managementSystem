<?php

    // データベース接続
    $dsn = "mysql:host=localhost;dbname=msystem;charset=utf8";
    $user="root";
    $pass="root";

    // 受け取った値をデータベースに保存する
    try {
        $db = new PDO($dsn, $user, $pass);

        $stmt = $db->prepare("SELECT * FROM users");

        $stmt->execute();
        
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);

    }catch (Exception $e) {
        echo $e->getMessage();
    }

?>

<table>
    <tr>
        <th>表示</th>
        <th>登録情報</th>
    </tr>

    <?php foreach ($result as $row) : ?>
        <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['care']; ?></td>
        <td><?php echo $row['time']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>