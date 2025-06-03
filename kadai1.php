<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>課題1</title>
    </head>
    <body>
        <h1>1日って何秒?????????????????</h1>
        <?php
            $hour = 24;
            $min = 60;
            $sec = 60;
            $day_sec = $hour * $min * $sec;
            print("1日は $hour 時間だね!");
            echo '<br>';
            print("1時間は $min 分だね!");
            echo '<br>';
            print("1分は $sec 秒だね!");
            echo '<br>';
            print("このことから、60秒x60分x24時間を計算して、1日は $day_sec 秒だと分かるね!!!!!!やったぁ!!!!!!!");
        ?>
    </body>
</html>