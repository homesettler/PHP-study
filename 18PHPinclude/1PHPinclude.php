<?php
    /*
    服务器段包含（SSI）用于创建可在多个页面重复使用的函数、页眉、页脚或元素
    include（或require）语句会获取指定文件中存在的所有文本/代码/标记，并复制到使用include语句的文件中。
    */

    /*
    include和require语句
    通过include或require语句，可以将PHP文件的内容插入到另一个PHP文件（在服务器执行它之前）

    include和require语句是相同的除了错误处理方面:
        require会生成致命错误（E_COMPILE_ERROR）并停止脚本
        include只生成警告(E_WARNING)，并且脚本会继续。

    因此，如果您希望继续执行，并向用户输出结果，即使包含文件已经丢失，那么请使用include。
    否则，在框架、CMS或者复杂的PHP应用编程中，请始终使用require向执行流引用关键文件。
    这有助于提高应用程序的安全性和完整性，在某个关键文件意外丢失的情况下

    包含文件省去了大量的工作，这意味着您可以为所有页面创建标准页头、页脚或者菜单文件。
    然后在页头需要更新时，只需要更新这个页头包含文件即可。
    */

    /*
    语法
    include ‘filename’
    require ‘filename’
    本目录中包含了三个例子
    includefooter.php
    includemenu.php
    includevars.php
    */

    /*
    include与require有一个巨大的差异：如果用include语句引用某个文件并且PHP无法找到它，脚本会继续执行：
    实例在testincludeErr.php和testrequireErr.php中
    */
?>