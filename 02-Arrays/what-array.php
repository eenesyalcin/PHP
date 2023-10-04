<?php

    /*
        DİZİ NEDİR?

        1)  --->  Diziler çok fazla değişkene ihtiyaç olduğunda, aynı veritipindeki değişkenleri
                  bir arada tutmamızı sağlar.
        2)  --->  Dizi elemanlarına gerektiğinde indis numarası ile ulaşırız. İndis numraları 
                  sıfırdan başar. İlk elemanın indis numarası sıfırdır(0).
    */

    $car1 = "BMW";
    $car2 = "Toyota";
    $car3 = "Mercedes";

    $cars = "BMW,Toyota,Mercedes";

    echo "En sevdiği araba ".$car1."<br>";
    echo "En sevdiği araba ".$car2."<br>";
    echo "En sevdiği araba ".$car3."<br>";

    echo "<hr>";

    // Diziler aşağıdaki gibi tanımlanır.
    $cars2 = array("BMW","Toyota","Mercedes");


    echo "'cars2' DEĞİŞKENİNİN VERİTİPİ = ".gettype($cars2)."<br>";  # array 

    echo "<hr>";

    // Dizilere elemanlara aşağıdaki gibi ulaşırız.
    echo $cars2[0]."<br>";  # bmw
    echo $cars2[1]."<br>";  # toyata
    echo $cars2[2]."<br>";  # mercedes

    echo "<hr>";

    echo "En sevdiği araba ".$cars2[0]."<br>";
    echo "En sevdiği araba ".$cars2[1]."<br>";
    echo "En sevdiği araba ".$cars2[2]."<br>";

?>