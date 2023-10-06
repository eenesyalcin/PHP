<?php

    # SWİTCH BLOĞU


    echo "DEĞERLER <br> <br>";
    $number = 3;
    $month = "September";
    $examScore = 55;
    echo "number = ".$number."<br>";
    echo "month = ".$month."<br>";
    echo "examScore = ".$examScore."<br> <br>";


    echo "<hr>";


    echo "SWİTCH BLOĞU <br> <br>";
    
    echo "If-Else ile Yapılışı <br>";
    if($number == 3){
        echo "Üç <br> <br>";
    }elseif($number == 4){
        echo "Dört <br> <br>";
    }else{
        echo "Hatalı sayı! <br> <br>";
    }

    // "Switch-Case-Default" kullanımı aşağıdaki gibidir. "If-Else" blokları ile yapabildiğimiz bazı işlemleri "switch" bloğuyla daha kolay ve pratik yapabilmekteyiz.
    echo "Switch ile Yapılışı <br>";
    switch($number){
        case 3:
            echo "Üç <br> <br>";
            break;
        case 4:
            echo "Dört";
            break;
        default:
            echo "Hatalı sayı! <br> <br>";
            break;
    }


    echo "<hr>";


    echo "BİRDEN FAZLA CASE İÇEREN SWİTCH BLOĞU <br> <br>";
    
    echo "If-Else ile Yapılışı <br>";
    if($month=="December" or $month=="January" or $month=="February"){
        echo "Kış mevsimi <br> <br>";
    }elseif($month=="March" or $month=="April" or $month=="May"){
        echo "İlkbahar mevsimi <br> <br>";
    }elseif($month=="June" or $month=="July" or $month=="August"){
        echo "Yaz mevsimi <br> <br>";
    }elseif($month=="September" or $month=="October" or $month=="November"){
        echo "Sonbahar mevsimi <br> <br>";
    }

    // "Switch" bloklarında birden fazla "Case" kullanımı aşağıdaki gibi yapılır.
    echo "Switch ile Yapılışı <br>";
    switch($month){
        case "December":
        case "January":
        case "February":
            echo "Kış mevsimi <br> <br>";
            break;
        case "March":
        case "April":
        case "May":
            echo "İlkbahar mevsimi <br> <br>";
            break;
        case "June":
        case "July":
        case "August":
            echo "Yaz mevsimi <br> <br>";
            break;
        case "September":
        case "October":
        case "November":
            echo "Sonbahar mevsimi <br> <br>";
            break;
        default:
            echo "Hatalı ay girişi! <br> <br>";
            break;
    }


    echo "<hr>";


    echo "ÖRNEK <br> <br>";
    
    echo "If-Else ile Yapılışı <br>";
    if($examScore>=0 and $examScore<25){
        echo "Notunuz = 0 <br> <br>";
    }elseif($examScore>=25 and $examScore<45){
        echo "Notunuz = 1 <br> <br>";
    }elseif($examScore>=45 and $examScore<55){
        echo "Notunuz = 2 <br> <br>";
    }elseif($examScore>=55 and $examScore<70){
        echo "Notunuz = 3 <br> <br>";
    }elseif($examScore>=70 and $examScore<85){
        echo "Notunuz = 4 <br> <br>";
    }elseif($examScore>=85 and $examScore<=100){
        echo "Notunuz = 5 <br> <br>";
    }else{
        echo "YANLIŞ NOT GİRİŞİ! <br> <br>";
    }

    echo "Switch ile Yapılışı <br>";
    switch(true){
        case ($examScore>=0 and $examScore<25):
            echo "Notunuz = 0 <br> <br>";
            break;
        case ($examScore>=25 and $examScore<45):
            echo "Notunuz = 1 <br> <br>";
            break;
        case ($examScore>=45 and $examScore<55):
            echo "Notunuz = 2 <br> <br>";
            break;
        case ($examScore>=55 and $examScore<70):
            echo "Notunuz = 3 <br> <br>";
            break;
        case ($examScore>=70 and $examScore<85):
            echo "Notunuz = 4 <br> <br>";
            break;
        case ($examScore>=85 and $examScore<=100):
            echo "Notunuz = 5 <br> <br>";
            break;
        default:
            echo "Yanlış not girişi! <br> <br>";
            break;
    }

?>