<?php

    /*
        DEĞİŞKEN NEDİR?

        1)  --->  PHP dilinde değişken tanımlarken değişken isminin başına "$" işaretini koymamız
                  gerekir.
        2)  --->  Değişkenlerin faydası geçici bir depo oluşturarak tek bir yerde yapılan
                  değişikliğin tüm yerlere yansımasıdır.
                  Örneğin; 
                  Aşağıda değişken tanımlayarak değişkenlere bir fiyat ve oran bilgisi atadık. Atadığımız oran değerinde bir değişiklik yaptığımızda tüm fiyatlarda oran bilgisini yazmaktansa direkt tüm fiyatlar değişkenlik gösterecektir.
    */
    
    $productA = 5000;
    $productB = 6000;
    $ratio = 0.18;

    echo $productA + ($productA * $ratio);
    echo "<br>";
    echo $productB + ($productB * $ratio);

?>