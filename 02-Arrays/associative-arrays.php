<?php

    /*
        ASSOCIATIVE DİZİLER

        1)  --->  Associative diziler, key(anahtar)-value(değer) mantığı ile çalışır. Her
                  anahtara karşılık gelen bir değer vardır. 
        2)  --->  Associative dizilerde ekrana yazdırma işlemini key(anahtar)
                  değeri ile yaparız.
        3)  --->  Associative diziye eleman eklemek istersek, key(anahtar)
                  ve value(değer) değerlerini kullanarak ekleyebiliriz.
    */

    
    $licensePlates = array("41","34");
    $cities = array("Kocaeli","İstanbul");

    echo "$licensePlates[0]: $cities[0]"."<br>";
    echo "$licensePlates[1]: $cities[1]"."<br>";

    echo "<hr>";

    # "KEY-VALUE" TANIMLAMASI
    $licensePlates_Info = array("41"=>"Kocaeli","34"=>"İstanbul");
    $telDirectory = array("Ali"=>"0(555) 555 55 55","Ahmet"=>"0(444) 444 44 44");
    /*
        Örneğin;
        array("41"=>"Kocaeli","34"=>"İstanbul"),
        41 ve 34             =  Key(anahtar) bilgileridir
        Kocaeli ve İstanbul  =  Value(değer) bilgileridir.
    */


    # EKRANA YAZDIRMA
    echo $licensePlates_Info["41"]."<br>";
    echo $licensePlates_Info["34"]."<br>";
    echo $telDirectory["Ali"]."<br>";
    echo $telDirectory["Ahmet"]."<br>";

    echo "<hr>";

    # ELEMAN EKLEME
    $licensePlates_Info["53"] = "Rize";
    $licensePlates_Info["35"] = "İzmir";

    echo $licensePlates_Info["35"]."<br>";

?>