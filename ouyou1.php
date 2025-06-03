<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>サンプルサイト</title>
    </head>
    <body>
        <h1>PHPでの配列と繰り返し</h1>
        <?php
            for($i=0; $i<=365; $i++){
                $daya = strtotime("+$i day");
                $w = date('w',$daya);
                $week_name = array("Sun", "Mon", "Tue", "Wed", "Tur", "Fri", "Sat");
                $day = date("m/d",$daya);
                print($day."($week_name[$w]),&nbsp;");
                if($i%14==13){
                    print("<br>");
                }
            }
        ?>
    </body>
</html>
