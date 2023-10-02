<?php

    # DEĞİŞKEN TANIMLAMA


    $number1 = 10;
    $number2 = 20;
    /*
        1)  --->  Değişkenler sayısal karakter ile başlayamaz.
                  Örneğin; $1number => yanlış tanımlama
    */


    $number1 = 30;
    // 2)  --->  Değişkenlerin değerlerinde değişiklik yapabiliriz.


    $number_3 = 40;
    /*
        3)  --->  Değişkne isimleri arasında boşluk olmaz.
                  Örneğin; $number 3 => yanlış tanımlama
    */


    $name = "Enes";
    $surname = 'YALÇIN';
    $namE = "Sena";
    /*
        4)  --->  Karakter ataması yaptığımızda çift tırnak("") ya da tek tırnak('')
                  kullanabiliriz.
        5)  --->  Büyük-küçük harf duyarlılığı vardır.
    */ 


    $birthyear = "1983";
    // 6)  --->  Değişken tanımlarken Türkçe karakter kullanmamalıyız.(Örneğin; $dogumTarihi)


    echo $number1." ".$number2;
    echo "<br>";
    echo $name." ".$surname;
    echo "<br>";
    echo $namE;

?>