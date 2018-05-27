<?php
    /*
    如果希望有选择的执行若干代码块之一，使用Switch语句。
    使用Switch可以避免冗长的if...elseif...else代码块

    工作原理
    1.对表达式（通常是变量）进行一次计算
    2.把表达式的值与结构中case的值进行比较
    3.如果存在匹配，则执行case关联的代码
    4.代码执行后，break语句阻止代码跳入下一个case中继续执行
    5.如果没有case为真，则使用default语句
    */

    switch($x)
    {
        case 1:
            echo "Number 1";
            break;
        case 2:
            echo "Number 2";
            break;
        case 3:
            echo "Number 3";
            break;
        default:
            echo "No number between 1 and 3";
    }
?>