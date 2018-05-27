<?php
    /*
    运算符      名称        例子        结果
    ==         等于        $x==$y     如果$x等于$y,则返回true。
    ===        全等        $x===$y    如果$x等于$y,且类型相同，则返回true
    !=         不等于      $x!=$y     如果$x不等于$y则返回true
    <>         不等于      $x<>$y     同上
    !==        不全等      $x!==$y    如果$x不等于$y或类型不相同，则返回true
    >          ...
    <          ...
    >=         ...
    <=         ...
    */         
    $x=100;
    $y="100";
    var_dump($x==$y);
    echo "<br>";
    var_dump($x===$y);
    echo "<br>";
    var_dump($x!=$y);
    echo "<br>";
    var_dump($x!==$y);
    echo "<br>";

    $a=50;
    $b=60;
    var_dump($a>$b);
    echo "<br>";
    var_dump($a<$b);

?>