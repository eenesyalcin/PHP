<?php

    /*
        SABİTLER

        1)  --->  Sabitler veri saklamak için kullanılır ancak atanan değer değiştirilemez.
        2)  --->  Sabitler aşağıdaki gibi "define()" ve "const" ile tanımlanırlar.
        3)  --->  Sabitler tanımlanırken başına "$" işareti koyulmaz.
    */

    define("connection","mssql");
    define("username","enesyalcin");
    const password = "1234";

    // connection = "mysql";  --->  Yanlıştır. Sabit olarak tanımlandığı için değiştirilemez.

    echo connection."<br>";
    echo username."<br>";
    echo password;

?>