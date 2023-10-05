<?php

    /*
        KARŞILAŞTIRMA OPERATÖRERİ

        ( == )   --->  Eşittir                            ( $x == $y )
        ( === )  --->  Veri tipi ve değeri eşittir        ( $x === $y ) 
        ( != )   --->  Eşit değildir                      ( $x != $y ) 
        ( <> )   --->  Eşit değildir                      ( $x <> $y ) 
        ( !== )  --->  Veri tipi ve değeri eşit değildir  ( $x !== $y ) 
        ( > )    --->  Büyüktür                           ( $x > $y ) 
        ( < )    --->  Küçüktür                           ( $x < $y ) 
        ( >= )   --->  Büyüktür ya da eşittir             ( $x >= $y ) 
        ( <= )   --->  Küçüktür ya da eşittir             ( $x <= $y ) 
        ( <=> )  --->  Eşittir(integer)                   ( $x <=> $y )      
    */

    $a = 5;
    $b = 5;
    $c = 20;
    $d = 4;
    $e = "5";
    $f = 50;
    $username = "enesyalcin";


    echo "DEĞERLER <br> <br>";
    echo "a = ".$a."<br>";
    echo "b = ".$b."<br>";
    echo "c = ".$c."<br>";
    echo "d = ".$d."<br>";
    echo "e = ".$e."<br>";
    echo "f = ".$f."<br>";
    echo "username = ".$username."<br> <br>";


    echo "<hr>";


    $result1 = ($a == $b);                   # true
    $result2 = ($a != $b);                   # false
    $result3 = ($username == "enesyalcin");  # true
    $result4 = ($username != "enesyalcin");  # false
    $result5 = ($a === $e);                  # false
    $result6 = ($a !== $e);                  # true    
    $result7 = ($a > $b);                    # false 
    $result8 = ($a >= $b);                   # true 
    $result9 = ($a < $c);                    # true 
    $result10 = ($a <= $c);                  # true 
    $result11 = ($a <=> $c);                 # -1 
    $result12 = ($a <=> $b);                 # 0 
    $result13 = ($f <=> $c);                 # 1 


    echo "İŞLEMLER ve SONUÇLAR <br> <br>";
    
    echo "a == b"."<br>";
    echo var_dump($result1)."<br> <br>";

    echo "a != b"."<br>";
    echo var_dump($result2)."<br> <br>";

    echo "username == enesyalcin"."<br> <br>";
    echo var_dump($result3)."<br>";

    echo "username != enesyalcin"."<br> <br>";
    echo var_dump($result4)."<br>";

    echo "a === e"."<br>";
    echo var_dump($result5)."<br> <br>";

    echo "a !== e"."<br>";
    echo var_dump($result6)."<br> <br>";

    echo "a > b"."<br>";
    echo var_dump($result7)."<br> <br>";

    echo "a >= b"."<br>";
    echo var_dump($result8)."<br> <br>";

    echo "a < c"."<br>";
    echo var_dump($result9)."<br> <br>";

    echo "a <= c"."<br>";
    echo var_dump($result10)."<br> <br>";

    echo "a <=> c"."<br>";
    echo var_dump($result11)."<br> <br>";

    echo "a <=> b"."<br>";
    echo var_dump($result12)."<br> <br>";

    echo "f <=> c"."<br>";
    echo var_dump($result13)."<br> <br>";

?>