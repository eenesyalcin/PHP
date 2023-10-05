<?php

    /*
        ATAMA OPERATÖRLERİ

        ( a = b )    --->   Atama        ( a = b )
        ( a += b )   --->   Toplama      ( a = a+b ) 
        ( a -= b )   --->   Çıkarma      ( a = a-b ) 
        ( a *= b )   --->   Çarpma       ( a = a*b ) 
        ( a /= b )   --->   Bölme        ( a = a/b ) 
        ( a %= b )   --->   Mod alma     ( a = a%b ) 
        ( a **= b )  --->   Üs alma      ( a = a**b ) 
        ( a .= b )   --->   Birleştirme  ( a = a.b ) 
    */


    // Bir değişkene tanımlandığı anda değer atamak zorunda değiliz. Daha sonra da atayabiliriz.
    $a;

    $a = 10;
    $b = 20;
    $c = $a;
    $d = ($a +10) * 2;

    echo "ATAMA İŞLEMLERİ <br> <br>";
    echo "a = ".$a."<br>";
    echo "b = ".$b."<br>";
    echo "c(a) = ".$c."<br>";
    echo "(a + 10) * 2 = ".$d."<br> <br>";


    echo "<hr>";
    

    $a1 = 10;
    $b1 = 20;
    $c1 = 2;
    $d1 = 40;
    $e1 = 21;
    $f1 = 2;
    $name = "Enes ";
    $surname = "YALÇIN";

    echo "İŞLEM ÖNCESİ DEĞERLER <br> <br>";
    echo "a1 = ".$a1."<br>";
    echo "b1 = ".$b1."<br>";
    echo "c1 = ".$c1."<br>";
    echo "d1 = ".$d1."<br>";
    echo "e1 = ".$e1."<br>";
    echo "f1 = ".$f1."<br>";
    echo "name = ".$name."<br>";
    echo "surname = ".$surname."<br> <br>";


    echo "<hr>";


    $a1 += 10;          # ( a1 = a1+10 )
    $b1 -= 10;          # ( b1 = b1-10 )
    $c1 *= 10;          # ( c1 = c1*10 ) 
    $d1 /= 10;          # ( d1 = d1/10 )
    $e1 %= 10;          # ( e1 = e1%10 )
    $f1 **= 10;         # ( f1 = f1**10 )
    $name .= $surname;  # ( ad = ad.soyad )

    echo "İŞLEM SONRASI DEĞERLER <br> <br>";
    echo "a1 = ".$a1."<br>";
    echo "b1 = ".$b1."<br>";
    echo "c1 = ".$c1."<br>";
    echo "d1 = ".$d1."<br>";
    echo "e1 = ".$e1."<br>";
    echo "f1 = ".$f1."<br>";
    echo "name = ".$name."<br>";

?>