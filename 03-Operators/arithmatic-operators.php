<?php

    /*
        ARİTMETİK OPERATÖRLER

        ( + )     --->  Toplama   ( $x + $y ) 
        ( - )     --->  Çıkarma   ( $x - $y )
        ( * )     --->  Çarpma    ( $x * $y )
        ( / )     --->  Bölme     ( $x / $y )
        ( % )     --->  Mod alma  ( $x % $y )
        ( ** )    --->  Üs alma   ( $x ** $y )
        ( ++$x )  --->  İşlem öncesi artırma 
        ( --$x )  --->  İşlem öncesi azaltma 
        ( $x++ )  --->  İşlem sonrası artırma  
        ( $x-- )  --->  İşlem sonrası azaltma  
    */

    $a = 10;
    $b = 5;

    echo "SAYILAR <br>";
    echo "a = ".$a."<br>";
    echo "b = ".$b;

    echo "<hr>";

    echo "İKİ SAYININ TOPLAMI <br>";
    echo "a + b = ".($a + $b);
    echo "<br>";

    echo "<hr>";

    echo "İKİ SAYININ FARKI <br>";
    echo "a - b = ".($a - $b);
    echo "<br>";

    echo "<hr>";

    echo "İKİ SAYININ ÇARPIMI <br>";
    echo "a * b = ".($a * $b);
    echo "<br>";

    echo "<hr>";

    echo "İKİ SAYININ BÖLÜMÜ <br>";
    echo "a / b = ".($a / $b);
    echo "<br>";

    echo "<hr>";

    echo "MOD ALMA <br>";
    echo "a mod b(10 mod 5) = ".($a % $b);
    echo "<br>";

    echo "<hr>";

    echo "ÜS ALMA <br>";
    echo "a'nın b'inci kuvveti(10 üzeri 5) = ".($a ** $b);
    echo "<br>";

    echo "<hr>";

    echo "İŞLEM ÖNCESİ ARTIRMA <br>";
    echo "a'nın ilk değeri = ".$a;
    echo "<br>";
    echo "a'nın işlemden yapıldığı andaki değeri = ".++$a;
    echo "<br>";
    echo "a'nın işlemden sonraki değeri = ".$a;
    echo "<br>";
    echo "NOT: İşlem öncesinde artırma yapılırsa, değer önce artar, sonra işlem yapılır.";
    echo "<br>";

    echo "<hr>";

    echo "İŞLEM SONRASI ARTIRMA <br>";
    echo "a'nın ilk değeri = ".$a;
    echo "<br>";
    echo "a'nın işlemden yapıldığı andaki değeri = ".$a++;
    echo "<br>";
    echo "a'nın işlemden sonraki değeri = ".$a;
    echo "<br>";
    echo "NOT: İşlem aonrasında artırma yapılırsa, önce işlem yapılır, sonra değer artar.";
    echo "<br>";

    echo "<hr>";

    echo "İŞLEM ÖNCESİ AZALTMA <br>";
    echo "b'nin ilk değeri = ".$b;
    echo "<br>";
    echo "b'nin işlemden yapıldığı andaki değeri = ".--$b;
    echo "<br>";
    echo "b'nin işlemden sonraki değeri = ".$b;
    echo "<br>";
    echo "NOT: İşlem öncesinde azaltma yapılırsa, değer önce azalır, sonra işlem yapılır.";
    echo "<br>";

    echo "<hr>";

    echo "İŞLEM SONRASI AZALTMA <br>";
    echo "b'nin ilk değeri = ".$b;
    echo "<br>";
    echo "b'nin işlemden yapıldığı andaki değeri = ".$b--;
    echo "<br>";
    echo "b'nin işlemden sonraki değeri = ".$b;
    echo "<br>";
    echo "NOT: İşlem aonrasında azaltma yapılırsa, önce işlem yapılır, sonra değer azalır.";
    echo "<br>";

?>