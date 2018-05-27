<html>
    <body>
        <form method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name:<input type="text" name = "fname">
        <input type = "submit">
        </form>

        <?php
            /*
            PHP $_POST管饭用于收集method=“post”的HTML表单后的表单数据。$_POST也常用于传递变量。
            下面的例子展示了一个包含输入字段和提交按钮的表单。当用户点击提交按钮来提交数据后，表单数据会发送到<form>标签
            的action属性中指定的文件。在本例中，我们指定文件本身来处理表单数据。如果希望使用另一个PHP页面来处理表单数据，
            更改为选择的文件名。然后，可以使用超全局变量$_POST来收集输入字段的值
            */
            $name = $_POST['fname'];
            echo $name;
        ?>
    </body>
</html>