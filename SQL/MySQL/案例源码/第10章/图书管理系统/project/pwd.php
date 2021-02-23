<?php
include("config.php");
require_once('book_check.php');
//引入判断管理员是否登录文件
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>管理员密码修改</title>
</head>
<body>
<?php
$password = $_SESSION["pwd"];
$SQL = "SELECT * FROM admin where password='$password'";
$rs = mysqli_query($link,$SQL);
$rows = mysqli_fetch_assoc($rs);
$submit = isset($_POST["Submit"])?$_POST["Submit"]:"";
if($submit) {
    if($rows["password"]==$_POST["password"]) {
        $password2=$_POST["password2"];
        $SQL = "UPDATE admin SET password='$password2' where id=2";
        mysqli_query($link,$SQL);
        echo "<script>alert('修改成功,请重新进行登陆！');parent.location.href='login.php'</script>";
        exit();
    } else
        ?>
        <?php { ?>
        <script>
            alert("原始密码不正确,请重新输入")
            //location.href="li_pwd.php";
        </script>
        <?php
    }
}
?>
<table cellpadding="5" cellspacing="1" border="0" width="100%" align=center bgcolor="#FFFFFF">
    <form name="renpassword" method="post" action="">
        <tr>
            <th height=40 colspan=4 align="left" style="border-bottom: 5px solid #BBFFFF">更改管理密码</th>
        </tr>
        <tr>
            <td width="40%" align="right">用户名：</td>
            <td width="60%"><?php echo $rows["username"] ?></td>
        </tr>
        <tr>
            <td align="right">原密码：</td>
            <td><input name="password" type="password" id="password" size="20"></td>
        </tr>
        <tr>
            <td align="right">新密码：</td>
            <td><input name="password1" type="password" id="password1" size="20"></td>
        </tr>
        <tr>
            <td align="right" style="border-bottom: 5px solid #BBFFFF">确认密码：</td>
            <td style="border-bottom: 5px solid #BBFFFF"><input  name="password2" type="password" id="password2" size="20"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input class="button" onClick="return check();" type="submit" name="Submit" value="确定更改">
            </td>
        </tr>
    </form>
</table>
</body>
</html>
<script type="text/javascript">
    function checkspace(checkstr) {
        var str = '';
        for(i = 0; i < checkstr.length; i++) {
            str = str + ' ';
        }
        return (str == checkstr);
    }
    function check()
    {
        if(checkspace(document.renpassword.password.value)) {
            document.renpassword.password.focus();
            alert("原密码不能为空！");
            return false;
        }
        if(checkspace(document.renpassword.password1.value)) {
            document.renpassword.password1.focus();
            alert("新密码不能为空！");
            return false;
        }
        if(checkspace(document.renpassword.password2.value)) {
            document.renpassword.password2.focus();
            alert("确认密码不能为空！");
            return false;
        }
        if(document.renpassword.password1.value != document.renpassword.password2.value) {
            document.renpassword.password1.focus();
            document.renpassword.password1.value = '';
            document.renpassword.password2.value = '';
            alert("新密码和确认密码不相同，请重新输入");
            return false;
        }
        document.admininfo.submit();
    }
</script>

