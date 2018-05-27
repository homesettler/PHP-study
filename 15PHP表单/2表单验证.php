<html>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name:<input type="text" name = "name">
    <span class="error">*<?php echo $nameErr;?></span>
    <br><br>
    E-mail:
    <input type="text" name = "email">
    <span class="error">*<?php echo $emailErr;?></span>
    <br><br>
    Website:
    <input type = "text" name = "website">
    <span class = "error"><?php echo $websiteErr;?></span>
    <br><br>
    <label>Comment:<textarea name ="comment" rows = "5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type = "radio" name = "gender" value = "female">Female
    <input type = "radio" name = "gender" value = "male">Male
    <span class="error">*<?php echo $genderErr;?></span>
    <br><br>
    <input type = "submit" name = "submit" value = "submit">
    </form>
    <?php

        /*
        表单验证
        上述html form元素中htmlspecialchars()函数
        htmlspecialchars()函数把特殊字符转换为HTML实体。这意味着<和>之类的HTML字符会被替换为&lt;和&gt;。
        这样可防止攻击者通过在表单中注入HTML或JavaScript代码（跨站点脚本攻击）对代码进行利用。
        */

        /*
        在用户提交该表单时，我们还要做两件事
        1.（通过PHP trim()）函数去除用户输入数据中不必要的字符（多余的空格、制表符、换行）
        2.（通过PHP stripslashes()函数）删除用户输入数据中的反斜杠（\)
        */

        /*
        表单必填项
        增加新的变量$nameErr,$emailErr,$genderErr以及websiteErr.
        这些错误变量会保存被请求字段的错误消息。
        为每个$_POST变量添加了一个if else语句。这条语句检查$_POST变量是否为空（通过PHP empty()函数）。
        如果为空，则错误消息会存储于不同的错误变量中。如果不为空，则通过test_input()函数发送用户输入数据
        */

        /*
        验证名字，E-mail，URL的正确性
        preg_match()函数检索字符串的模式，如果模式存在则返回true，否则返回false
        */
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $nameErr=$emailErr=$genderErr=$websiteErr="";
        $name=$email=$gender=$comment=$website="";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"])){
                $nameErr="Name is required";
            }else{
                $name = test_input($_POST["name"]);
                if(!preg_match("/^[a-zA-Z]*$/",$name)){
                    $nameErr="Only letters and white space allowed";
                }
            }
            if(empty($_POST["email"])){
                $emailErr="Email is required";
            }else{
                $email = test_input($_POST["email"]);
                if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
                    $emailErr = "Invalid email format";
                }
            }
            if(empty($_POST["website"])){
                $website = "";
            }else{
                $website = test_input($_POST["website"]);
                if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
                    $websiteErr="Invalid URL";
                }
            }
            if(empty($_POST["comment"])){
                $comment = "";
            }else{
                $comment = test_input($_POST["comment"]);
            }
            if(empty($_POST["gender"])){
                $genderErr = "Gender is required";
            }else {
                $gender = test_input($_POST["gender"]);
            }
        }
    ?>
</body>
</html>