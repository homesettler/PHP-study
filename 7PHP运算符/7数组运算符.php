<?php
    /*
    运算符          名称            例子                结果
    +               联合            $x + $y            $x和$y的联合（但不覆盖重复的键）   
    ==              相等            $x == $y           如果$x和$y拥有相同的键/值对，则返回true
    ===             全等            $x === $y          如果$x和$y拥有相同的键/值对，且顺序相同类型相同，则返回true
    !=              不相等          $x != $y           如果$x不等于$y则返回true
    <>              不相等          $x <> $y           如果$x不等于$y则返回true
    !==             不全等          $x !== $y          如果$x与$y完全不同，则返回true
    */
    $x=array("a"=>"red","b"=>"green");
    $y=array("c"=>"blue","d"=>"yellow");
    $z = $x + $y;
    var_dump($z);
    var_dump($x == $y);
    var_dump($x === $y);
    var_dump($x!=$y);
    var_dump($x<>$y);
    var_dump($x!==$y);
?>