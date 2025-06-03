<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>サンプルサイト</title>
    </head>
    <body>
        <h1>PHPでの配列と繰り返し</h1>
        <?php
            $word = [
                'apple' => 'りんご',
                'lemon' => 'レモン',
                'grape' => 'ぶどう',
                'tomato' => 'トマト',
            ];
            foreach($word as $key => $value){
                print("英語 : $key<br>");
                print("日本語 : $value<br>");
            }
        ?>
    </body>
</html>
