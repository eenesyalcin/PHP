<?php

    # ELSEIF BLOĞU

    echo "ELSEIF BLOĞU <br> <br>";
    $username = "enesyalcin";
    $password = "12345";

    // Burada iç içe koşul ifadeleri yazmak yerine birden fazla sorgu bloğunu yazdık. İlk sorgu bloğundan sonraki bloklar "elseif" bloğu ile tanımlanır ve bu blok içerisine de "if" bloğunda olduğu gibi şartlar yazabiliriz.
    if($username != "enesyalcin")
    {
        echo "'username' HATALI!. <br> <br>";
    }
    elseif($password != "12345")
    {
        echo "'password' HATALI! <br> <br>";
    }
    else
    {
        echo "GİRİŞ BAŞARILI. <br> <br>";
    }


    echo "<hr>";


    echo "ÖRNEK <br> <br>";
    // Burada saatin durumuna göre gün içerisinde kullanıcıya mesaj yollanmaktadır.
    $hour = date("H");
    if($hour < 10)
    {
        echo "GÜNAYDIN. <br> <br>";
    }
    elseif($hour < 20)
    {
        echo "İYİ GÜNLER. <br> <br>";
    }
    else
    {
        echo "İYİ GECELER. <br> <br>";
    }

?>