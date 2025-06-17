<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>課題1</title>
    </head>
    <body>
        <?php
        session_start();
        $_SESSION['name'] = '岸 柚貴';
        $name = $_SESSION['name'];
        echo"<h3>セッションに名前($name)をセットしました</h3><br>";
        ?>
        <a href=kadai2-2.php>kadai2-2.phpへ</a>
    </body>
</html>