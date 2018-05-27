<?php
    /*
    常量是单个值的标识符（名称）。在脚本中无法直接改变该值。
    有效的常量名以字符或下划线开头（常量名称前面没有$符号）。
    
    与变量不同，常量贯穿整个脚本是自动全局的。
    */

    /*
    设置PHP常量
    如需设置常量，使用define()函数 - 它使用三个参数
        1.首个参数定义常量的名称
        2.第二个参数定义常量的值
        3.可选的第三个参数规定常量名是否对大小写不敏感。默认是false。
    */
    define("GREETING","Hello World!");
    echo GREETING;

    define("GREETING","Hello World!",true);
    echo greeting;
?>