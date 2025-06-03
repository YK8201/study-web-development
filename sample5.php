<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>サンプルサイト</title>
    </head>
    <body>
        <h1>PHPでのfor文</h1>
        <?php
            for($i=100; $i>=1; $i--){
                if($i%2==0){
                    print($i."&nbsp;");
                }
                if($i%20==0){
                    print("<br>");
                }
            }
        ?>
    </body>
</html>
