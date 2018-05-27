<?php
    //echo 语句能够报告HTML标记

    echo "<h2>PHP is fun!</h2>";
    echo "Hello world!<br>";
    echo "this", "string","was","made","with multiple parameters<br>";

    //echo命令可以显示字符串和变量
    $txt1 = "Learn PHP";
    $txt2 = "is fun";
    $cars = array("Volvo","BMW","SAAB");

    echo $txt1;
    echo "<br>";
    echo "study PHP is $txt2";
    echo "My car is a {$cars[0]}";
?>