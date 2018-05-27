<?php

    //global关键词用于访问函数内的全局变量。

    $x=5;
    $y=10;
    function myTest(){
        global $x,$y;
        $y = $x + $y;
    }
    myTest();
    echo $y."<br>";//输出15

    /*
    PHP同时在名为$GLOBALS[index]的数组中存储了所有的全局变量。
    下标存有变量名。这个数组在函数内也可以访问，并能够用于直接更新全局变量。
    */
    function myTest2(){
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    myTest2();
    echo $y."<br>";//输出20
?>