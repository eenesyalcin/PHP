<?php

    # IF-ELSE BLOĞU
    

    # IF BLOĞU
    echo "IF BLOĞU <br> <br>";
    $isLoggedIn1 = false;

    // Burada değer "false" geldiği için "if" bloğu çalıştırılmaz. Değer "true" gelseydi "if" bloğu çalıştırılırdı.
    if($isLoggedIn1){
        echo "MERHABA <br>";
        echo "MERHABA <br>";
        echo "MERHABA <br> <br>";
    }


    echo "<hr>";


    # IF-ELSE BLOĞU
    echo "IF-ELSE BLOĞU <br> <br>";
    $username1 = "enesyalcin";
    $password1 = "12345";

    // Burada değer "true" geldiği için "if" bloğu çalıştırılır. Değer "false" gelseydi "else" bloğu çalıştırılırdı.
    $isLoggedIn2 = ($username1 == "enesyalcin" and $password1 == "12345");
    if($isLoggedIn2)
    {
        echo "UYGULAMAYA HOŞGELDİNİZ. <br> <br>";
    }
    else{
        echo "'username' VEYA 'password' HATALI! <br> <br>";
    }


    echo "<hr>";


    # İÇ İÇE IF-ELSE BLOĞU
    echo "İÇ İÇE IF-ELSE BLOĞU <br> <br>";
    $username2 = "senabetulyazicioglu";
    $password2 = "1234567890";

    // Burada iç içe bir koşul blokları oluşturulmuştur. Önce "username" bilgisinin doğruluğu kontrol edilmiştir. Eğer doğruysa "if" bloğu içerisine girilir ve "password" bilgisi kontrol edilir.
    $isLoggedIn3 = ($username2 == "senabetulyazicioglu");
    if($isLoggedIn3)
    {
        if($password2 == "12345678910")
        {
            echo "UYGULAMAYA HOŞGELDİNİZ. <br> <br>";
        }
        else
        {
            echo "'password' HATALI! <br> <br>";
        }
    }
    else{
        echo "'username' HATALI! <br> <br>";
    }

?>