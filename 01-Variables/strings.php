<?php

    # METİNSEL İFADELER


    // Eğer izin verilmeyen karakterleri yazdırmak istersek, karakterin başına ters slaş(\) koymamız gerekir. 
    $message = "My name\'s Enes YALÇIN and 22 years old.";


    $name = "Enes";
    $surname = "YALÇIN";
    $age = 22;


    // Aşağıda değişkenleri string ifadeler içinde kullanmanın yolları yer almaktadır.
    $message1 = "My name's $name $surname and $age years old.";
    $message2 = "My name's {$name} {$surname} and {$age} years old.";
    $message3 = "my name's ".$name." ".$surname." and ".$age." years old.";


    // Eğer herhangi bir özel karakterin aşağıdaki gibi metin olarak yazdırılmasını istersek o ifadenin başına ters slaş(\) koymamız gerekir. 
    $message4 = "My name's \$ad $surname and $age years old.";


    echo $message1."<br>";
    echo $message2."<br>";
    echo $message3."<br>";
    echo $message4."<br>";

    
    // Eğer string ifadenin içerisindeki bir karaktere ulaşmak istersek aşağıdaki gibi ulaşabiliriz. Boşluk karakteri de string ifadeye dahildir.
    echo "String ifadenin 1. karakteri = ".$message1[0]."<br>";  # m
    echo "String ifadenin 4. karakteri = ".$message1[3]."<br>";  # n


    /*
        STRING() FONKSİYONU ile YAPILABİLEN İŞLEMLER

        1) strlen()          --->  String ifadenin karakter sayısını bulur.
        2) str_word_count()  --->  String ifadenin kelime sayısını bulur.
        3) strtolower()      --->  String ifadenin harflerini küçük harfe dönüştürür.
        4) strtoupper()      --->  String ifadenin harflerini büyük harfe dönüştürür.
        5) ucfirst()         --->  String ifadenin baş harfini büyük harfe dönüştürür.
        6) str_replace()     --->  String ifadedeki belli karakteri değiştirir.
    */
    
    echo strlen($message1)."<br>";  # 40 karakter
    echo str_word_count($message1)."<br>";  # 8 kelime
    echo strtolower($message1)."<br>";
    echo strtoupper($message4)."<br>";
    echo ucfirst($message4)."<br>";


    echo str_replace("Enes","Sena",$message4)."<br>";
    /*
        Örneğin; 
        str_replace("Enes","Sena",$message4) bu ifadede,
        "Enes"   =  Değiştirilecek ifade.
        "Sena"   =  Değiştirilecek ifadenin yerine gelecek ifade.
        $mesaj4  =  Değişim olacak string değişkeni.
    */

    
    echo str_replace(["Enes","YALÇIN"],["Sena","YAZICIOĞLU"],$message4)."<br>";
    /*
        Eğer bir string ifadede daha fazla değişiklik yapmak istersek aşağıdaki gibi dizi kullanmamız gerekir.
        Örneğin; 
        str_replace(["Enes","YALÇIN"],["Sena","YAZICIOĞLU"],$message4),
        "Enes"        =  İlk değiştirilecek ifade.
        "YALÇIN"      =  İkinci değiştirilecek ifade.
        "Sena"        =  İlk değiştirilecek ifadenin yerine gelecek ifade.
        "YAZICIOĞLU"  =  İkinci değiştirilecek ifadenin yerine gelecek ifade.
        $mesaj4       =  Değişim olacak string değişkeni.
    */

?>