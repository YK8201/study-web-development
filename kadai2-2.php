<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>課題1</title>
    </head>
    <body>
        <?php
        session_start();
        $name = $_SESSION['name'];
        echo"<h3>セッションから名前: $name を取得しました</h3>";
        ?>
    </body>
</html>