<?php
    /*
    PHP中的许多预定义变量都是“超全局的”，这意味着它们在一个脚本的全部作用域中都可用。
    在函数或方法中无需执行global,$variable就可以访问它们
    这些超全局变量是：
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
    */
    
    /*
    $GLOBALS -- 引用全局作用域中可用的全部变量
    $GLOBALS这种全局变量用于在PHP脚本中的任意位置访问全局变量
    PHP在名为$GLOBALS[index]数组中存储了所有全局变量。变量的名字就是数组的键。
    */
?>