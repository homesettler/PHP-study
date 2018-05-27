<?php
    //print 字符串中也能包含HTML标记

    print "<h2>PHP is fun!</h2>";
    print "Hello world!<br>";

    //print也能显示字符串和变量
    $txt1 = "Hello ";
    $txt2 = "World!";
    $cars = array("Volvo","BMW","SAAB");

    print $txt1;
    print "<br>";
    print "Hello $txt2";
    print "My car is a {$cars[1]}";
?>