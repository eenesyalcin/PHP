<?php

    # TERNARY OPERATÖRÜ


    echo "DEĞERLER <br> <br>";
    $age = 20;
    $education = "Lise";
    echo "age = ".$age."<br>";
    echo "education = ".$education."<br> <br>";


    echo "<hr>";


    echo "TERNARY OPERATÖRÜ <br> <br>";
    
    echo "If-Else ile Yapılışı <br>";
    if($age >= 18){
        if($education=="Lise" or $education=="Üniversite"){
            echo "Ehliyet alabilir. <br> <br>";
        }else{
            echo "Ehliyet alamaz. Eğitim yetersiz! <br> <br>";
        }
    }else{
        echo "Ehliyet alamaz. Yaş tutmuyor! <br> <br>";
    }

    // "Ternary" operatörünün kullanımı aşağıdaki gibidir. "If-Else" blokları ile yapabildiğimiz aynı işlemleri "ternary" bloğuyla da yapabiliriz. "Ternary" operatörü "If-Else" bloklarının bir alternatifidir.
    echo "Ternary ile Yapılışı <br>";
    echo ($age >= 18)
        ? ($education=="Lise" or $education=="Üniversite")
            ? "Ehliyet alabilir. <br> <br>"
            : "Ehliyet alamaz. Eğitim yetersiz! <br> <br>"
        : "Ehliyet alamaz. Yaş tutmuyor! <br> <br>";

?>