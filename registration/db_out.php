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

    }catch (Exception $e) {
        echo $e->getMessage();
    }

?>

<table>
    <tr>
        <th>ID</th>
        <th>名前</th>
        <th>介護度</th>
        <th>利用時間</th>
    </tr>

    <!-- dbの中身を一つずつ取り出す -->
    <?php foreach ($result as $row) : ?>
        <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['care']; ?></td>
        <td><?php echo $row['time']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>