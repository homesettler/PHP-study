<?php
    /* 
    多维数组指的时包含一个或多个数组的数组
    PHP能理解多级的多维数组，然而超过三级深的数组对于大多数人难以管理。
    数组的维数指示需要选择元素的索引数。
    */

    /*
    二维数组
    */
    $cars = array(
        array("Volvo",22,18),
        array("BMW",15,13),
        array("SAAB",5,2),
        array("Land Rover",17,15)
    );
    /*
    现在这个数组包含了四个数组，并且它有两个索引（下标）：行和列。
    如需访问$cars数组中的元素，我们必须使用两个索引
    */
    echo $cars[0][0].": 库存: ".$cars[0][1].", 销量: ".$cars[0][2].".<br>";
    echo $cars[1][0].": 库存: ".$cars[1][1].", 销量: ".$cars[1][2].".<br>";
    echo $cars[2][0].": 库存: ".$cars[2][1].", 销量: ".$cars[2][2].".<br>";
    echo $cars[3][0].": 库存: ".$cars[3][1].", 销量: ".$cars[3][2].".<br>";
    

    //也可以在For循环中使用另一个for循环，来获得$cars数组中的元素（我们仍然需要使用两个索引）：

    for($row = 0;$row<4;$row++){
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for($col = 0;$col < 3;$col++){
            echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
    }
?>