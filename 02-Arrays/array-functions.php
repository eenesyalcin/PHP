<?php

    /*
        DİZİ FONKSİYONLARI

        1) count()                --->  Dizilerdeki eleman sayısını döndürür.
        2) sort()                 --->  Dizideki değerleri küçükten büyüğe sıralar.
        3) asort()                --->  Associative dizilerde value(değer) değerine göre
                                        küçükten büyüğe sıralar.
        4) ksort()                --->  Associative dizilerde key(anahtar) değerine göre
                                        küçükten büyüğe sıralar.
        5) rsort()                --->  Dizideki değerleri büyükten küçüğe sıralar.
        6) arsort()               --->  Associative dizilerde value(değer) değerine göre
                                        büyükten küçüğe sıralar. 
        7) krsort()               --->  Associative dizilerde key(anahtar) değerine göre
                                        büyükten küçüğe sıralar. 
        8) explode()              --->  Bir string ifadeyi diziye çevirir.
        9) implode()              --->  Bir diziyi string bir ifadeye çevirir.
        10) shuffle()             --->  Dizideki değerleri rastgele sıralar.
        11) array_combine()       --->  İki diziyi associative dizi olarak birleştirir.
        12) array_merge()         --->  İki diziyi tek bir dizi olarak birleştirir.
        13) array_count_values()  --->  Bir dizideki elemanların tekrar sayılarını döndürür.
        14) array_push()          --->  Dizilerin sonuna eleman ekler.
        15) array_unshift()       --->  Dizilerin başına eleman ekler.
    */

    $numbers = array(1,5,7,4,56,78,12,45);
    $names = array("Enes","Sena","Betül","Sıla");
    $users = array("enesyalcin"=>"19","senayazicioglu"=>"57","sılayazicioglu"=>"37");

    echo "DİZİLERİN ELEMAN SAYISI <br> <br>";
    echo count($numbers)."<br>";
    echo count($names)."<br>";
    echo count($users)."<br> <br>";

    echo "<hr>";

    sort($numbers);
    sort($names);
    asort($users);  # value
    ksort($users);  # key

    echo "DİZİLERİN KÜÇÜKTEN BÜYÜĞE SIRALANMIŞ HALİ <br> <br>";
    print_r($numbers);
    echo "<br>";
    print_r($names);
    echo "<br>";
    print_r($users);
    echo "<br> <br>"; 

    echo "<hr>";

    rsort($numbers);
    rsort($names);
    arsort($users); #value
    krsort($users); #key

    echo "DİZİLERİN BÜYÜKTEN KÜÇÜĞE SIRALANMIŞ HALİ <br> <br>";
    print_r($numbers);
    echo "<br>";
    print_r($names);
    echo "<br>";
    print_r($users); 
    echo "<br> <br>";

    echo "<hr>";

    echo "STRING BİR İFADENİN DİZİYE ÇEVRİLMİŞ HALİ <br> <br>";
    $string = "Enes|YALCIN|22";
    $arr = explode("|",$string);
    print_r($arr);
    echo "<br> <br>";
    /*
        Örneğin;
        explode("|",$string) ifadesinde,
        "|"      =  Hangi karakterlerde elemanlara ayıracağını belirtir.
        $string  =  Hangi string ifadenin diziye dönüştürüleceğini belirtir.
    */
    
    echo "<hr>";

    echo "BİR DİZİNİN STRING BİR İFADEYE ÇEVRİLMİŞ HALİ <br> <br>";
    $arr2 = array("Sena","YAZICIOGLU","20");
    $string2 = implode("-",$arr2);
    print_r($string2);
    echo "<br>";
    /*
        Örneğin;
        implode("-",$arr2) ifadesinde,
        "-"    =  Her dizi elemanı arasına gelecek karakteri belirtir.
        $arr2  =  Hangi dizinin string bir ifadeye çevrileceğini belirtir.
    */

    echo "<hr>";

    echo "DİZİLERİN RASTGELE SIRALANMIŞ HALİ <br> <br>";
    print_r($names);
    echo "<br>";
    shuffle($names);
    print_r($names);
    echo "<br> <br>";
    print_r($numbers);
    echo "<br>";
    shuffle($numbers);
    print_r($numbers);
    echo "<br> <br>";

    echo "<hr>";

    echo "İKİ DİZİNİN ASSOCIATIVE DİZİ OLARAK BİRLEŞTİRİLMİŞ HALİ <br> <br>";
    $licensePlates_Info = array("37","57");
    $cities = array("Kastamonu","Sinop");
    print_r($licensePlates_Info);
    echo "<br>";
    print_r($cities);
    echo "<br> <br>";
    $arr3 = array_combine($licensePlates_Info,$cities);
    print_r($arr3);
    echo "<br> <br>";
    /*
        İki dizinin birinci elemanı ile birinci elemanı, ikinci elemanı ile
        ikinci elemanı eşleşir.
        Örneğin;
        $licensePlates_Info = array("37","57")
        $cities = array("Kastamonu","Sinop")
        $arr3 = array_combine($licensePlates_Info,$cities) ifadesinde,
        37 => Kastamonu,
        57 => Sinop birleştirmesi yapar.
    */

    echo "<hr>";

    echo "İKİ DİZİNİN TEK BİR DİZİ OLARAK BİRLEŞTİRİLMİŞ HALİ <br> <br>";
    $arr4 = ["Rize","İzmir"];
    $arr5 = ["Ankara","Çorum"];
    print_r($arr4);
    echo "<br>";
    print_r($arr5);
    echo "<br> <br>";
    $arr6 = array_merge($arr4,$arr5);
    print_r($arr6);
    echo "<br> <br>";

    echo "<hr>";

    echo "BİR DİZİDE AYNI OLAN ELEMANLARIN TEKRAR SAYILARI <br> <br>";
    $arr7 = ["Ankara","Çorum","Ankara","Çorum","İzmir","Antalya"];
    $arr8 = array_count_values($arr7);
    print_r($arr8);
    echo "<br> <br>";

    echo "<hr>";

    echo "DİZNİN SONUNA ELEMAN EKLENMİŞ HALİ <br> <br>";
    $arr9 = ["Rize","İzmir"];
    print_r($arr9);
    echo "<br>";
    array_push($arr9,"Giresun");
    print_r($arr9);
    echo "<br> <br>";

    echo "<hr>";

    echo "DİZNİN BAŞINA ELEMAN EKLENMİŞ HALİ <br> <br>";
    $arr10 = ["Rize","İzmir"];
    print_r($arr10);
    echo "<br>";
    array_unshift($arr10,"Giresun");
    print_r($arr10);
    echo "<br> <br>";

?>