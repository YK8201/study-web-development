<?php
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    if (isset($height) == true && ($weight) == true){
        $risou = $height * $height * 22;
        $tekisei = $risou - $weight;
        $bmi = number_format($weight / ($height * $height),2);
        if ($bmi < 18.5){
            $hantei = "低体重";
        }
        elseif ($bmi < 25){
            $hantei = "標準";
        }
        elseif ($bmi < 30){
            $hantei = "太り気味";
        }
        else{
            $hantei = "肥満";
        }
        echo "体重".htmlspecialchars($weight,ENT_QUOTES,'UTF-8')."kg<br/>";
        echo "理想".$risou."kg<br/>";
        echo "後".$tekisei."kg で適正体重です。<br/>";
        echo "BMI".$bmi."<br/>";
        echo $hantei."です。";
    }
?> 