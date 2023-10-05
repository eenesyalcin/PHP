<?php

    /*
        MANTIKSAL OPERATÖRLER

        ( AND )  --->  ( VE ) x ve y'nin true olması ile sonuç true olur.
        ( OR )   --->  ( VEYA ) x ve y'den herhangi birisinin true olması ile sonuç true olur.
        ( XOR )  --->  () x ve y'den herhangi birisinin true olması ya da ikisinin false olması ile sonuç true olur.
        ( ! )    --->  ( DEĞİL ) x'in tersini alır.
    */

    
    /*
        AND(VE) OPERATÖRÜ
        true ve true    --->  true
        true ve false   --->  false
        false ve false  --->  false
    */
    echo "AND(VE) OPERATÖRÜ <br> <br>";

    $x = 15;
    $result1 = ($x>5);            # true
    $result1 = ($x<15);           # false
    $result1 = ($x>5 and $x<15);  # false
    echo "x = ".$x."<br>";
    echo "(x > 5 and x < 15) <br>";
    echo var_dump($result1)."<br> <br>";

    $right = 1;
    $continue = "e";
    $result2 = ($right>0 and $continue="e");  # true
    echo "right=1 ve continue='e' <br>";
    echo "(right > 0 and continue='e') <br>";
    echo var_dump($result2)."<br> <br>";


    echo "<hr>";


    /*
        OR(VEYA) OPERATÖRÜ
        true ya da true    --->  true
        true ya da false   --->  true
        false ya da false  --->  false
    */
    echo "OR(VEYA) OPERATÖRÜ <br> <br>";

    $y = 5;
    $result3 = ($y>0);          # true
    $result3 = ($y%2);          # false
    $result3 = ($y>0 or $y%2);  # true
    echo "y = ".$y."<br>";
    echo "(y > 0 or y % 2) <br>";
    echo var_dump($result3)."<br> <br>";


    echo "<hr>";


    /*
        XOR OPERATÖRÜ
        true xor true    --->  false
        true xor false   --->  true
        false xor false  --->  false
    */
    echo "XOR OPERATÖRÜ <br> <br>";

    $a = 10;
    $b = 20;
    $result4 = ($a==10);             # true
    $result4 = ($b==20);             # true
    $result4 = ($a==10 xor $b==20);  # false
    echo "a = ".$a." ve b = ".$b."<br>";
    echo "(a == 10 xor b == 20) <br>";
    echo var_dump($result4)."<br> <br>";


    echo "<hr>";


    # NOT-DEĞİL(!) OPERATÖRÜ
    echo "NOT-DEĞİL(!) OPERATÖRÜ <br> <br>";

    $c = 10;
    $result5 = !($c>0);  # true => !(true) = false
    echo "c = ".$c."<br>";
    echo "!(c > 0) <br>";
    echo var_dump($result5)."<br> <br>";


    echo "<hr>";


    echo "ÖRNEK <br> <br>";
    
    $d = 6;
    $result6 = ($d>5 and $d<10) and ($d%2==0);  # true => !(true) = false
    echo "d = ".$d."<br>";
    echo "(d > 5 and d < 10) and (d % 2 == 0) <br>";
    echo var_dump($result6)."<br>";

?>