<?php
    /*
    PHP date()函数用于对日期或时间进行格式化
    PHP Date()函数把时间戳格式话为更易读的日期和时间。
    语法：date(format,timestamp)
    format：必须。规定时间戳的格式
    timestamp：可选。规定时间戳，默认是当前时间和日期

    date()函数的格式参数是必需的，它们规定如何格式化日期或时间。
    下面列出了一些常用于日期的字符
        d —— 表示月里的某天（01-31）
        m —— 表示月（01-12）
        Y —— 表示年（四位数）
        l —— 表示周里的某天
    其他字符，比如“/”，“.”或“-”也可被插入字符中，以增加其他格式。
    */

    echo "Today is ".date("Y/m/d")."<br>";
    echo "Today is ".date("Y.m.d")."<br>";
    echo "Today is ".date("Y-m-d")."<br>";
    echo "Today is ".date("l");
?> 