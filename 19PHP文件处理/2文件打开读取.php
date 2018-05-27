<?php

    /*
    打开文件最好的方法是通过fopen()函数。此函数为您提供比readfile()函数更多的选项
    fopen()的第一个参数包含被打开的文件名，第二个参数规定打开文件的模式。
    如果fopen()数未能打开指定文件，下面的例子die会生成信息。
    文件打开方式
    r   ——  打开文件为只读，文件指针在文件的开头开始
    w   ——  打开文件为只写，删除文件的内容或创建一个新的文件，如果它不存在，文件指针在文件的开头开始
    a   ——  打开文件为只写，文件中的现有数据会被保留。文件指针在文件结尾开始，创建新的文件，如果文件不存在。
    x   ——  创建新文件为只写。如果文件已存在，返回false和错误。
    r+  ——  打开文件为读/写，文件指针在文件开头开始。
    w+  ——  打开文件为读/写。删除文件内容或创建新文件，如果它不存在。文件指针在文件开头开始
    a+  ——  打开文件为读/写。文件中已有的数据会被保留。文件指针在文件结尾开始。如果文件不存在，创建新文件。
    x+  ——  创建新文件为读/写。如果文件已存在，返回FALSE和错误。
    */

    /*
    PHP读取文件-fread()
    fread()函数读取或打开的文件
    fread()的第一个参数包含待读取文件的文件名，第二个参数规定待读取的最大字节数。
    */

    /*
    PHP关闭文件-fclose()
    fclose()函数用于关闭打开的文件。
    fclose()需要待关闭文件的名称。
    */
    $myfile = fopen("webdictionary.txt","r") or die("Unable to open file!");
    echo fread($myfile,filesize("webdictionary.txt"));
    fclose($myfile);

    /*
    PHP读取单行文件-fgets()
    fgets()函数用于从文件读取单行。
    */
    $myfile = fopen("webdictionary.txt","r") or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);
    /*
    PHP检查End-Of-File - feof()
    feof()对于便利未知长度的数据很有用。
    */
    $myfile = fopen("webdictionary.txt","r") or die("Unable to open file!");
    while(!feof($myfile)){
        echo fgets($myfile)."<br>";
    }
    fclose($myfile);

    /*
    PHP读取单字符 - fgetc()
    fgetc()函数用于从文件中读取单个字符
    */
    $myfile = fopen("webdictionary.txt","r") or die("Unable to open file!");
    while(!feof($myfile)){
        echo fgetc($myfile);
    }
    fclose($myfile);
?>