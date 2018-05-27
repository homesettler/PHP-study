<?php
    /*
    有两种创建索引数组的方法
    */
    //自动分配索引（从0开始）
    $cars = array("Volvo","BMW","SAAB");
    var_dump($cars);
    echo "<br>";
    //手动分配索引
    $color[0] = "red";
    $color[1] = "blue";
    $color[2] = "yellow";
    var_dump($color);
    //获得数组长度-count()函数
    echo count($cars);
?>