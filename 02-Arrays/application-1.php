<?php

    # ÖRNEK-1

    # YÖNTEM-1
    $product1 = array("IPhone 11", 7000);
    $product2 = array("IPhone 12", 9000);
    $product3 = array("Samsung S20", 8000);

    # YÖNTEM-2(Associative ve Çok Boyutlu Dizi)
    $products = array(
        array("IPhone 11", 7000), 
        array("IPhone 12", 9000), 
        array("Samsung S20", 8000)
    );

    // Ürün fiyatlarının ortalaması ve ekrana yazdırılması.
    $averagePrice = ($products[0][1] + $products[1][1] + $products[2][1])/3;
    echo "FİYAT ORTALAMASI = ".$averagePrice;


    echo "<hr>";


    # ÖRNEK-2
    
    // (Associative ve Çok Boyutlu Dizi)
    $players = array(
        "Ronaldo" => array(
            "name" => "Cristiano Ronaldo",
            "yearOfBirth" => "1985",
            "nationality" => "Portugal",
            "current_team" => "Portugal",
            "history" => array("Juventus","Real Madrid","Portugal"),
        ),
        "Messi" => array(
            "name" => "Lionel Messi",
            "yearOfBirth" => "1987",
            "nationality" => "Argentina",
            "current_team" => "Barcelona",
            "history" => array("Barcelona","PSG","Argentina"),
        )
    );

    // Oyuncuların bazı bilgilerinin ekrana yazdırılması.
    print_r($players["Ronaldo"]["name"]);
    echo "<br>";
    print_r($players["Messi"]["history"]);
    echo "<br>";
    print_r($players["Messi"]["history"][0]);

?>