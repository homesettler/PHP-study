<?php
    /*
    如果从代码返回的不是正确的时间，有可能是因为服务器位于其他国家或者被设置为不同时区
    因此，如果需要基于具体位置的准确时间，可以设置要用的时区。
    */
    date_default_timezone_set("Asia/Shanghai");
    echo "当前时间是 ".date("h:i:sa");
    
?>