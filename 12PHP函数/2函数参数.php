<?php
    /*
    可以通过参数向函数传递信息。参数类似变量。
    参数被定义在函数名之后，括号内部。可以添加任意多参数，只要用逗号隔开即可。
    */
    function familyName($fname){
        echo "$fname Zhang.<br>";
    }
    familyName("Li");
    familyName("Hong");
    familyName("Tao");
    familyName("Xiao Mei");
    familyName("Jian");

    //多参数
    function familyName2($fname,$year){
        echo "$fname Zhang. Born in $year<br>";
    }
    familyName2("Li","1975");
    familyName2("Hong","1978");
    familyName2("Tao","1983");


    //默认参数值
    function setHeight($minheight=50){
        echo "The height is : $minheight<br>";
    }
    setHeight(350);
    setHeight();
    setHeight(135);
?>