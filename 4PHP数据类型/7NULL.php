<?php
    /*
    特殊的NULL值表示变量无值，NULL是数据类型NULL唯一可能的值。
    NULL值标示变量是否为空。也用于区分空字符串与空值数据库。
    可以通过把值设置为NULL，将变量清空：
    */

    $x="Hello world";
    $x=null;
    $y=NULL;
    var_dump($x);
    echo "<br>";
    var_dump($y);
?>