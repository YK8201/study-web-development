<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>サンプルサイト</title>
    </head>
    <body>
        <h1>PHPでの計算</h1>
        <?php
            $apple = 100;
            $meet = 1000;
            $egg = 200;
            $sum = $apple * 2 + $meet + $egg * 2;
            $sumtax = $sum + $sum * 0.1;
            print("税抜き合計は $sum 円<br>");
            print("税込み合計は $sumtax 円");
        ?>
        <!--あああああああああ!!!!!!!!-->
    </body>
</html>