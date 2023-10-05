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
    echo "((a * b) - (a + b + c)) <br>";
    echo "Sonuç = ".(($a*$b)-($a+$b+$c))."<br> <br>";


    echo "<hr>";


    # ÖRNEK-2
    echo "ÖRNEK-2 <br> <br>";
    echo "((a + b + c) % 3) <br>";
    echo "Sonuç = ".(($a+$b+$c)%3)."<br> <br>";


    echo "<hr>";


    # ÖRNEK-3
    echo "ÖRNEK-3 <br> <br>";
    echo "(b ** c) <br>";
    echo "Sonuç = ".($b**$c)."<br> <br>";


    echo "<hr>";


    # ÖRNEK-4
    echo "ÖRNEK-4 <br> <br>";
    $result1 = ($a>50 and $a<100);
    echo "(a > 50 and a < 100) <br>";
    echo var_dump($result1)."<br> <br>";


    echo "<hr>";


    # ÖRNEK-5
    echo "ÖRNEK-5 <br> <br>";
    $result2 = ($a>0 and $a%2==0);
    echo "(a > 0 and a % 2 == 0) <br>";
    echo var_dump($result2)."<br> <br>";


    echo "<hr>";


    # ÖRNEK-6
    echo "ÖRNEK-6 <br> <br>";
    $result3 = ($username=="enesyalcin" and $password=="12345");
    echo "(username == 'enesyalcin' and password == '12345') <br>";
    echo var_dump($result3)."<br> <br>";


    echo "<hr>";


    # ÖRNEK-7
    echo "ÖRNEK-7 <br> <br>";
    $result4 = ($a>$b and $a>$c);
    echo "(a > b and a > c) <br>";
    echo "'a' En büyük sayıdır = ".intval($result4)."<br> <br>";

    $result5 = ($b>$a and $b>$c);
    echo "(b > a and b > c) <br>";
    echo "'b' En büyük sayıdır = ".intval($result5)."<br> <br>";

    $result6 = ($c>$a and $c>$b);
    echo "(c > a and c > b) <br>";
    echo "'c' En büyük sayıdır = ".intval($result6)."<br> <br>";


    echo "<hr>";


    # ÖRNEK-8
    echo "ÖRNEK-8 <br> <br>";
    $average = (($midterm1+$midterm2)/2)*0.4+($finalExam*0.6); 
    echo "((midterm1 + midterm2) /2 ) * 0.4 + (finalExam * 0.6) <br>";
    echo "Ortalama = ".$average."<br> <br>";

    echo "GEÇME DURUMLARI <br>";
    $situation1 = ($average>=50);
    echo "(average >= 50) <br>";
    echo "Geçme durumu = ".intval($situation1)."<br>";

    $situation2 = ($average>=50 and $finalExam>=50);
    echo "(average >= 50 and finalExam >= 50) <br>";
    echo "Geçme durumu = ".intval($situation2)."<br>";

    $situation3 = ($average>=50 or $finalExam>=50);
    echo "(average >= 50 or finalExam >= 50) <br>";
    echo "Geçme durumu = ".intval($situation3)."<br> <br>";

?>