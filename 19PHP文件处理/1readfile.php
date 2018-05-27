<?php
    /*
    readfile()函数读取文件，并把它写入输出缓冲
    假设我们有一个名为“webdictionary.txt”的文本文件，存放在服务器上

    读取此文件并写到输出流的PHP代码如下（如读取成功则readfile()函数返回字节数）：
    */
    echo readfile("webdictionary.txt");
?>