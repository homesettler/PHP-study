<?php
    /*
    关联数组是使用分配给数组的指定键的数组
    有两种创建方法
    */
    //第一种方式
    $age = array("Peter"=>"35","Ben"=>"37","Joe"=>43);

    //第二种方式
    $height["Peter"] = "180";
    $height["Ben"] = "181";
    $height["Joe"] = "182";

    //遍历关联数组
    foreach($age as $x=>$x_value){
        echo "Key=".$x.",Value"=".x_value";
        echo "<br>";
    }
?>