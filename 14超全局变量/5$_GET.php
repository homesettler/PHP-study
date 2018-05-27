<html>
    <body>
        <a href = "5$_GET.php?subject=PHP&web=localhsot">测试$GET</a>
        <?php
            /*
            PHP$_GET也可用于收集提交HTML表单（method="get"）之后的表单数据。
            $_GET也可以收集URL中发送的数据
            
            该例中，我们有一张页面含有带参数的超链接
            
            当用户点击链接测试$GET，参数"subject"和"web"被发送到"5$_GET.php"，
            然后就能通过$_GET在"5$_GET.php"中访问这些值了
            */
        
            echo "Study".$_GET['subject']."at".$_GET['web'];
        ?>
    </body>
</html>