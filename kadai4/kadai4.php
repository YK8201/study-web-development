<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>課題3</title>
    </head>
    <body>
        <?php
            try {
                $db = new PDO("mysql:dbname=mydb;host=localhost;port=8889;charset=utf8", "root", "root");
                $stmt = $db -> query("SELECT * FROM `items` WHERE 1");
                $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo 'DB接続エラー: ' . $e->getMessage();
            }
        ?>
        <table border="1">
            <tr>
            <th>ID</th>
            <th>商品名</th>
            </tr>
            <?php foreach ($records as $item): ?>
                <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['name'] ?></td>
                </tr> 
            <?php endforeach; ?>
        </table>
    </body>
</html>