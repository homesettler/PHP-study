<?php
    /*
    通过strtotime() 函数用于把人类可读的字符串转化为Unix时间。
    语法
    strtotime(time,now)
    */

    $d=strtotime("09:30pm March 23 2018");
    echo "创建日期是 ". date("Y-m-d h:i:sa",$d);

    //PHP将字符串转换为日期这方面非常聪明，所以能够使用各种值

    $d=strtotime("tomorrow");
    echo date("Y-m-d h:i:sa",$d)."<br>";

    $d=strtotime("next Saturday");
    echo data("Y-m-d h:i:sa",$d)."<br>";

    $d=strtotime("+3 Months");
    echo date("Y-m-d h:i:sa",$d)."<br>";
?> 