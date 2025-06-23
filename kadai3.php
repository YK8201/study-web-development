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
            } catch (PDOException $e) {
                echo 'DB接続エラー: ' . $e->getMessage();
            }
            $records = $db->query("SELECT * FROM `items` WHERE 1");
            print($records);
        ?>
    </body>
</html>