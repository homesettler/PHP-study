<?php
    /*
    Local和Global作用域
    函数之外声明的变量拥有Global作用域，只能在函数以外进行访问。
    函数内部声明的变量拥有LOCAL作用域，只能在函数内部进行访问。
    */

    # 实例
    $x=5;//全局作用域
    function myTest(){
        $y=10;//局部作用域
        echo "<p>测试函数内部的变量</p>";
        echo "变量x是: $x";
        echo "<br>";
        echo "变量y是: $y";
    }
    myTest();

    echo "<p>测试函数之外的变量:</p>";
    echo "变量x是：$x";
    echo "<br>";
    echo "变量y是：$y";
?>