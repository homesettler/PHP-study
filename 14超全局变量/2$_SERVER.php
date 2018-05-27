<?php
    /*
    PHP $_SERVER
    $_SERVER这种超全局变量保存关于报头、路径和脚本位置的信息。
    */
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    /*
    以下是$_SERVER中访问的最重要的元素
    $_SERVER['PHP_SELF']返回当前执行脚本的文件名
    $_SERVER['GATEWAY_INTERFACE']返回服务器使用的CGI规范的版本
    $_SERVER['SERVER_ADDR']返回当前运行脚本所在的服务器的IP地址
    $_SERVER['SERVER_NAME']返回当前运行脚本所在的服务器的主机名
    $_SERVER['SERVER_SOFTWARE']返回服务器标识字符串
    $_SERVER['SERVER_PROTOCOL']返回请求页面时通信协议的名称和版本
    $_SERVER['REQUEST_METHOD']返回访问叶脉呢使用的请求方法（例如POST）
    $_SERVER['REQUEST_TIME']返回请求开始时的时间戳
    $_SERVER['QUERY_STRING']返回查询字符串，如果是通过查询字符串访问此页面
    $_SERVER['HTTP_ACCEPT']返回当前请求的请求头
    $_SERVER['HTTP_ACCEPT_CHARSET']返回来自当前请求的Accept_Charset头（例如utf-8,ISO-8859-1）
    $_SERVER['HTTP_HOST']返回来自当前请求的Host头
    $_SERVER['HTTP_REFERER']返回当前页面的完整URL
    $_SERVER['HTTPS']是否通过安全HTTP协议查询脚本
    $_SERVER['REMOTE_ADDR']返回浏览当前页面的用户的IP地址。
    $_SERVER['REMOTE_HOST']返回浏览当前页面的用户的主机名。
    $_SERVER['REMOTE_PORT']返回用户机器上连接到Web服务器所使用的端口号
    $_SERVER['SCRIPT_FILENAME']返回当前执行脚本的绝对路径
    $_SERVER['SERVER_ADMIN']该值指明了Apache服务器配置文件中的SERVER_ADMIN参数
    $_SERVER['SERVER_PORT']Web服务器使用的端口，默认值为“80”
    $_SERVER['SERVER_SIGNATURE']返回服务器版本和虚拟主机名
    $_SERVER['PATH_TRANSLATED']当前脚本所在文件系统（非文档根目录）的基本路径
    $_SERVER['SCRIPT_NAME']返回当前脚本的路径
    $_SERVER['SCRIPT_URI']返回当前页面的URI
    */
?>