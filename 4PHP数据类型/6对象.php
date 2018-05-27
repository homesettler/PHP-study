<?php
    /*
    对象是存储数据和有关如何处理数据的信息的数据类型
    在PHP中，必须明确声明对象。
    首先我们必须声明对象的类。对此，我们使用class关键词。类是包含属性和方法的结构
    然后我们在对象类中定义数据类型，然后在该类的实例中使用此数据类型：
    */

    class Car{
        var $color;
        function Car($color="green"){
            $this->color=$color;
        }
        function what_color(){
            return $this->color;
        }
    }

    function print_vars($obj){
        foreach(get_object_vars($obj) as $prop => $val){
            echo "\t$prop = $val\n";
        }
    }

    $newCar = new Car("white");
    print_vars($newCar);
?>