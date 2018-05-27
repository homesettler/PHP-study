<?php
    /*
    通过PHPmktime()创建日期

    date()函数中可选的时间戳参数规定时间。如果未规定时间戳，将使用当前日期和时间
    mktime()函数返回日期的Unix时间戳。Unix时间戳包含Unix纪元（1970年1月1日00:00:00 GMT）与制定时间之间的秒数
    mktime(hour,minute,second,month,day,year);
    */

    $d = mktime(21,21,31,5,23,2018);
    echo "创建的日期是 ". date("Y-m-d h:i:sa",$d);
?>