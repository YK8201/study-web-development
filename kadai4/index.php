<?php require_once __DIR__ . '/login_check.php';?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>ログイン成功</title>
    </head>
    <body>
    <?php
    if (!empty($_SESSION['login'])) {
    ?>
        <h1>ログイン成功</h1>
        <p>ログインに成功しました</p>
        <a href="logout.php">ログアウト</a>

    <?php
    } else {
    ?>
        <h1>ログインしていません</h1>
        <p>ログインしてください。</p>
        <a href="login.php">ログインページへ</a>
    <?php
    }
    ?>
    </body>
</html>