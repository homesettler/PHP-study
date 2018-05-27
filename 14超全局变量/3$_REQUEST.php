<html>
    <body>
    <form method ="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name:<input type="text" name = "fname">
    <input type="submit">
    </form>
    <?php
        /*
        PHP$_REQUEST
        $_REQUEST用于收集HTML表单提交的数据
        本例展示了一个包含输入字段及提交按钮的表单。当用户通过点击提交按钮来提交表单数据时，表单数据将发送到<form>标签的
        action属性中制定的脚本文件。在这个例子中，我们指定文件本身来处理表单数据，如果需要使用其他的PHP文件来处理
        表单数据，请修改为选择的文件名。然后，可以使用超全局变量$_REQUEST来收集input字段的值：
        */
        $name = $_REQUEST['fname'];
        echo $name;
    ?>
    </body>
</html>