<?php

    # ÇOK BOYUTLU DİZİLER


    // Çok boyutlu diziler aşağıdaki gibi dizinin içerisinde dizi oluşturarak tanımlanır.
    $studentA = array("Enes YALÇIN", array(60,50,70));
    $studentB = array("Sena Betül YAZICIOĞLU", array(70,90,100));


    // Dizi bilgilerini aşağıdaki gibi ekrana yazdırabiliriz. Dizinin ikinci elemanını, yani notların hepsini doğrudan ekrana yazdıramayız.
    echo $studentA[0]."<br>";  # Enes YALÇIN          
    echo $studentA[1][0]."<br>";  # 60
    echo $studentA[1][1]."<br>";  # 50
    echo $studentA[1][2]."<br> <br>";  # 70

    echo $studentB[0]."<br>";  # Sena Betül YAZICIOĞLU       
    echo $studentB[1][0]."<br>";  # 70
    echo $studentB[1][1]."<br>";  # 90
    echo $studentB[1][2]."<br>";  # 100

    echo "<hr>";

    // Öğrencilerin ortalamasının hesaplanması.
    $averageA = ($studentA[1][0] + $studentA[1][1] + $studentA[1][2])/3;
    echo "$studentA[0] isimli öğrencinin ortalaması = $averageA"."<br>";

    $averageB = ($studentB[1][0] + $studentB[1][1] + $studentB[1][2])/3;
    echo "$studentB[0] isimli öğrencinin ortalaması = $averageB"."<br>";

    echo "<hr>";

    # ASSOCIATIVE DİZİLER ile ÇOK BOYUTLU DİZİLERİN BİRLİKTE KULLANIMI
    $studentsC = array(
        "100" => array(
            "name"=>"Enes",
            "surname"=>"YALÇIN",
            "math"=>array(40,50,60),
            "physical"=>array(60,70,80)
        ),
        "101" => array(
            "name"=>"Sena",
            "surname"=>"YAZICIOĞLU",
            "math"=>array(80,90,100),
            "physical"=>array(40,60,80)
        ),
        "102" => array(
            "name"=>"Betül",
            "surname"=>"YAZICIOĞLU",
            "math"=>array(100,100,80),
            "physical"=>array(80,85,90)
        ),
    );


    // Değerlerin ekrana yazdırılması aşağıdaki gibidir.
    echo $studentsC["100"]["name"]."<br>";
    echo $studentsC["101"]["name"]."<br>";

    echo "<hr>";

    // Öğrencilerin ortalamasının hesaplanması.

    # Enes YALÇIN isimli öğrencinin matematik ve fizik ortalamaları.
    $averageEnesMath = ($studentsC["100"]["math"][0] + $studentsC["100"]["math"][1] + $studentsC["100"]["math"][2])/3;
    echo $studentsC["100"]["name"]." ".$studentsC["100"]["surname"]." isimli öğrencinin matematik ders ortalaması: ".$averageEnesMath."<br>";

    $averageEnesPhysical = ($studentsC["100"]["physical"][0] + $studentsC["100"]["physical"][1] + $studentsC["100"]["physical"][2])/3;
    echo $studentsC["100"]["name"]." ".$studentsC["100"]["surname"]." isimli öğrencinin fizik ders ortalaması: ".$averageEnesPhysical."<br>";

    echo "<hr>";

    # Sena YAZICIOĞLU isimli öğrencinin matematik ve fizik ortalamaları.
    $averageSenaMath = ($studentsC["101"]["math"][0] + $studentsC["101"]["math"][1] + $studentsC["101"]["math"][2])/3;
    echo $studentsC["101"]["name"]." ".$studentsC["101"]["surname"]." isimli öğrencinin matematik ders ortalaması: ".$averageSenaMath."<br>";

    $averageSenaPhysical = ($studentsC["101"]["physical"][0] + $studentsC["101"]["physical"][1] + $studentsC["101"]["physical"][2])/3;
    echo $studentsC["101"]["name"]." ".$studentsC["101"]["surname"]." isimli öğrencinin fizik ders ortalaması: ".$averageSenaPhysical."<br>";

    echo "<hr>";

    # Betül YAZICIOĞLU isimli öğrencinin matematik ve fizik ortalamaları.
    $averageBetulMath = ($studentsC["102"]["math"][0] + $studentsC["102"]["math"][1] + $studentsC["102"]["math"][2])/3;
    echo $studentsC["102"]["name"]." ".$studentsC["102"]["surname"]." isimli öğrencinin matematik ders ortalaması: ".$averageBetulMath."<br>";

    $averageBetulPhysical = ($studentsC["102"]["physical"][0] + $studentsC["102"]["physical"][1] + $studentsC["102"]["physical"][2])/3;
    echo $studentsC["102"]["name"]." ".$studentsC["102"]["surname"]." isimli öğrencinin fizik ders ortalaması: ".$averageBetulPhysical."<br>";

?>