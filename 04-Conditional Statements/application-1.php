<?php

    $a = 50;
    $b = 4;
    $c = 2;
    $username = "enesyalcin";
    $password = "12345";
    $midterm1 = 50;
    $midterm2 = 50;
    $finalExam = 70;

    echo "DEĞERLER <br> <br>";
    echo "a = ".$a."<br>";
    echo "b = ".$b."<br>";
    echo "c = ".$c."<br>";
    echo "username = ".$username."<br>";
    echo "password = ".$password."<br>";
    echo "midterm1 = ".$midterm1."<br>";
    echo "midterm2 = ".$midterm2."<br>";
    echo "finalExam = ".$finalExam."<br> <br>";


    echo "<hr>";
    

    # ÖRNEK-1
    echo "ÖRNEK-1 <br> <br>";
    $result1 = ($a>50 and $a<100);
    echo "(a > 50 and a < 100) <br>";
    echo var_dump($result1)."<br>";
    if($result1){
        echo "'a' Değeri 50-100 arasındadır. <br> <br>";
    }else{
        echo "'a' Değeri 50-100 arasında değildir. <br> <br>";
    }


    echo "<hr>";


    # ÖRNEK-2
    echo "ÖRNEK-2 <br> <br>";
    $result2 = ($a>0 and $a%2==0);
    echo "(a > 0 and a % 2 == 0) <br>";
    echo var_dump($result2)."<br>";
    if($result1){
        echo "'a' Değeri pozitif, çift sayıdır. <br> <br>";
    }else{
        echo "'a' Değeri pozitif, çift sayı değildir. <br> <br>";
    }


    echo "<hr>";


    # ÖRNEK-3
    echo "ÖRNEK-3 <br> <br>";
    $result3 = ($a>$b and $a>$c);
    echo "(a > b and a > c) <br>";
    echo var_dump($result3)."<br> <br>";

    $result4 = ($b>$a and $b>$c);
    echo "(b > a and b > c) <br>";
    echo var_dump($result4)."<br> <br>";

    $result5 = ($c>$a and $c>$b);
    echo "(c > a and c > b) <br>";
    echo var_dump($result5)."<br> <br>";

    if($result3){
        echo "'a' Değeri en büyük sayıdır. <br> <br>";
    }elseif($result4){
        echo "'b' Değeri en büyük sayıdır. <br> <br>";
    }elseif($result5){
        echo "'c' Değeri en büyük sayıdır. <br> <br>";
    }else{
        echo "HATALI SONUÇ! <br> <br>";
    }


    echo "<hr>";


    # ÖRNEK-4
    echo "ÖRNEK-4 <br> <br>";
    $average = (($midterm1+$midterm2)/2)*0.4+($finalExam*0.6); 
    echo "((midterm1 + midterm2) /2 ) * 0.4 + (finalExam * 0.6) <br>";
    echo "Ortalama = ".$average."<br> <br>";

    echo "GEÇME DURUMLARI <br>";
    $situation1 = ($average>=50);
    echo "(average >= 50) <br>";
    echo var_dump($situation1)."<br>";

    $situation2 = ($average>=50 and $finalExam>=50);
    echo "(average >= 50 and finalExam >= 50) <br>";
    echo var_dump($situation2)."<br>";

    $situation3 = ($average>=50 or $finalExam>=50);
    echo "(average >= 50 or finalExam >= 50) <br>";
    echo var_dump($situation3)."<br> <br>";

    if($situation1){
        echo "Geçme durumu = GEÇTİ <br> <br>";
    }elseif($situation2){
        echo "Geçme durumu = GEÇTİ <br> <br>";
    }elseif($situation2){
        echo "Geçme durumu = GEÇTİ <br> <br>";
    }else{
        echo "Geçme durumu = KALDI <br> <br>";
    }

?>