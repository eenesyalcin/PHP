<?php

    # SAYISAL İFADELER


    // Aşağıda matematiksel ifadelerin kullanımı vardır.
    echo "SONUÇ = ".(10+5)."<br>";
    echo "SONUÇ = ".(10-5)."<br>";
    echo "SONUÇ = ".(10*5)."<br>";
    echo "SONUÇ = ".(10/5)."<br>";


    $number1 = 10;
    $number2 = 20;
    $number3 = 5;


    // Aşağıda sayıların değişkenlere atadıktan sonraki kullanımı vardır.
    echo "SONUÇ = ".($number1+$number2)."<br>";
    echo "SONUÇ = ".($number1-$number2)."<br>";
    echo "SONUÇ = ".($number1*$number2)."<br>";
    echo "SONUÇ = ".($number1/$number2)."<br>";


    // Aşağıda işlem önceliği için matematiksek ifadelerin kullanım şekli vardır.
    echo "SONUÇ = ".(($number1+$number2)/$number3)."<br>";
    echo "SONUÇ = ".(($number1-$number2)/$number3)."<br>";
    echo "SONUÇ = ".($number1*$number2/$number3)."<br>";
    echo "SONUÇ = ".($number1/$number2*$number3)."<br>";


    echo is_int(10)."<br>";
    echo var_dump(is_int(10))."<br>";
    echo var_dump(is_int(10.2))."<br>";
    echo var_dump(is_int("10"))."<br>";

    echo is_float(10)."<br>";
    echo var_dump(is_float(10))."<br>";
    echo var_dump(is_float(10.2))."<br>";
    echo var_dump(is_float("10"))."<br>";
     /*
        "is_veriTipi()" ifadesi değişken veritipinin sayısal olarak doğru olup olmadığını söyler. Doğruysa bir(1), yanlışsa sıfır(0) değerini döndürür. "var_dump(is_veriTipi())" ifadesi ise değişken veritipinin boolean olarak doğru olup olmadığını söyler. Doğruysa bool(true), yanlışsa bool(false) değerini döndürür.
        Örneğin;
        is_float(10)              =  0
        (is_float(10.2)           =  1
        var_dump(is_float(10))    =  bool(false)
        var_dump(is_float(10.2))  =  bool(true), değerlerini döndürürler.
        
    */


    echo var_dump(is_numeric("10"))."<br>";
    echo var_dump(is_numeric(10))."<br>";
    echo var_dump(is_numeric("10a"))."<br>";
    echo var_dump(is_numeric("a10"))."<br>";
    /*
        "var_dump(is_numeric()" ifadesi değişken veritipine bakmaksızın ifadenin boolean türünde, sayısal olup olmadığını söyler.
        Örneğin;
        var_dump(is_numeric("10"))   =  bool(true)
        var_dump(is_numeric(10))     =  bool(true)
        var_dump(is_numeric("10a"))  =  bool(false)
        var_dump(is_numeric("a10"))  =  bool(false), değerlerini döndürürler.
    */


    /*
        MATH() FONKSİYONU ile YAPILABİLEN İŞLEMLER

        1) abs()    --->  Sayının mutlak değerini alır.
        2) ceil()   --->  Ondalıklı sayıyı yukarıya yuvarlar.
        3) floor()  --->  Ondalıklı sayıyı aşağıya yuvarlar.
        4) round()  --->  Ondalıklı sayıyı yuvarlama kurallarına göre tuvarlar.
        5) sqrt()   --->  Sayının karekökünü alır.
        6) pow()    --->  Üstel sayı işlemlerini yapar. Birinci sayı taban, ikincisi üstür.
        7) max()    --->  Girilen sayıların en büyüğünü bulur.
        8) min()    --->  Girilen sayıların en küçüğünü bulur.
    */

    echo abs(-10)."<br>";
    echo ceil(4.3)."<br>";
    echo floor(4.9)."<br>";
    echo round(4.9)."<br>";
    echo sqrt(25)."<br>";
    echo pow(2,5)."<br>";
    echo max(2,5,10,4,89)."<br>";
    echo min(2,5,10,4,89)."<br>";

?>