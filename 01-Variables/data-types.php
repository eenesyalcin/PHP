<?php

    /*
        VERİ TİPLERİ

        1) string        --->  Metinsel bilgiler
        2) integer(int)  --->  Tam sayılar
        3) double        --->  Ondalıklı sayılar
        4) boolean       --->  True/False bilgi
        5) object        --->  Nesne
        6) arrays        --->  Diziler
        7) null          --->  Değer içermeyen değişken
    */


    # STRING
    $productName = "Iphone 14";
    echo gettype($productName);


    echo "<br>";


    # INTEGER(INT)
    $price = 9000;  
    echo gettype($price);


    echo "<br>";


    # DOUBLE
    $ratio = 0.18; 
    echo gettype($ratio);


    echo "<br>";


    # BOOLEAN
    $toSell = false;  
    echo gettype($toSell);


    echo "<br>";


    # INTEGER(INT) TO DOUBLE
    $a = (double)10;  
    echo gettype($a)." ---> ".$a;


    echo "<br>";


    # DOUBLE TO INTEGER(INT)
    $b = (int)10.5;  
    echo gettype($b)." ---> ".$b;
    // Ekrana tam kısmı yazdırılır.


    echo "<br>";


    # STRING TO INTEGER(INT)  
    $c = (int)"20";  
    echo gettype($c)." ---> ".$c;


    echo "<br>";


    # STRING TO INTEGER(INT)  
    $d = (int)"a20";
    echo gettype($d)." ---> ".$d;
    // Veritipi olarak çevirme yapar fakat sayısal anlamda çeviremediği için varsayılan değeri olan sıfır(0) değeri atar.
    

    echo "<br>";


    # STRING TO INTEGER(INT)  
    $e = (int)"20a";  
    echo gettype($e)." ---> ".$e;
    // Çevirebildiği kadarını baştan itibaren çevirir.


    echo "<br>";


    # BOOLEAN TO INTEGER(INT)
    $f = (int)true;  
    echo gettype($f)." ---> ".$f;
    $f = (int)false;
    echo gettype($f)." ---> ".$f;
    /*
        Eğer boolena değeri;
            true   =  1,
            false  =  0, değerine çevirir.
    */

?>