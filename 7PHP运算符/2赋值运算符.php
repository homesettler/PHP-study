<?php
    /*
    PHP赋值运算符用于向变量写值
    赋值            等同于
    x = y          x = y
    x += y         x = x + y
    x -= y         x = x - y
    x *- y         x = x * y
    x /= y         x = x / y
    x %= y         x = x % y
    */
    $x = 10;
    echo $x;
    echo "<br>";

    $y = 20;
    $y += 100;
    echo $y;
    echo "<br>";

    $z = 50;
    $z -= 25;
    echo $z;
    echo "<br>";

    $i = 5;
    $i *= 6;
    echo $i;
    echo "<br>";

    $j=10;
    $j /= 5;
    echo $j;
    echo "<br>";

    $k=15;
    $k %= 4;
    echo $k;
    echo "<br>";
?>