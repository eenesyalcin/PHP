<?php

    # DİZİ TANIMLAMA


    $numbers = array(1,2,3,4,5);
    $names = array("Sena","Enes",);


    // Dizi elemanları üzerine ezerek farklı değerler yazabiliriz. Aşağıda dizinin veritipi de string olmuştur.
    $numbers[0] = "Bir";
    $numbers[1] = "İki";
    $numbers[2] = "Üç";
    $numbers[3] = "Dört";

    // Burada dizide olmayan bir elemanı ekleyerek diziyi genişletmiş olduk.
    $numbers[5] = "altı";


    echo "$numbers[0] <br>";
    echo "$numbers[1] <br>";
    echo "$numbers[2] <br>";
    echo "$numbers[3] <br>";
    echo "$numbers[4] <br>";
    echo "$numbers[5] <br>";

    echo "<hr>";

    echo "$names[0] <br>";
    echo "$names[1] <br>";

    echo "<hr>";

    # STRING BİR İFADEYİ PARÇALAMA
    $brands = "BMW,Toyota,Mercedes";
    $brands2 = explode(",",$brands);
    /*
        String bir ifadeyi "explode()" methodu ile parçalayabiliriz.
        Örneğin;
        explode(",",$brands) ifadesinde yer alan,
        ","      =  String ifadenin her virgülde bir eleman olarak ayrılması gerektiğini söyler.
        $brands  =  Hangi string ifadenin ayrılacağını belirtir.
    */

    
    echo "Araba markası = $brands2[0] <br>";
    echo "Araba markası = $brands2[1] <br>";
    echo "Araba markası = $brands2[2] <br>";

?>