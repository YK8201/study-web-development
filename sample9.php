<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>サンプルサイト</title>
    </head>
    <body>
        <?php
            if (isset($_POST['name']) == true){
                echo '<font size="7">';
                echo '<b>';
                echo "送信した値: ";
                echo htmlspecialchars($_POST["name"],ENT_QUOTES,'UTF-8');
                echo '</b>';
                echo '</font>';
            }
        ?>
        <form action="sample9.php" method="post">
            <input id="name" type="text" name="name">
            <input type="submit" value="送信する">
        </form>
    </body>
</html>