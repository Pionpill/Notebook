<?php
require_once("config.php"); //引入数据库文件
?>
<?php
if(@$_POST["Submit"]) {
    $username=$_POST["username"];
    $pwd=$_POST["pwd"];
    $code=$_POST["code"];
    if($code<>$_SESSION["auth"]) {
        echo "<script language=javascript>alert('验证码不正确！');window.location='login.php'</script>";
        ?>
        <?php
        die();
    }
    $SQL ="SELECT * FROM admin where username='$username' and password='$pwd'";
    $rs=mysqli_query($link,$SQL);
    if(mysqli_num_rows($rs)==1) {
        $_SESSION["pwd"]=$_POST["pwd"];
        $_SESSION["admin"]=session_id();
        echo "<script language=javascript>alert('登陆成功！');window.location='admin_index.php'</script>";
    }
    else {
        echo "<script language=javascript>alert('用户名或密码错误！');window.location='login.php'</script>";
        ?>
        <?php
        die();
    }
}
?>
<?php
if(@$_GET['tj'] == 'out'){
    session_destroy();
    echo "<script language=javascript>alert('退出成功！');window.location='login.php'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>图书后台管理系统登陆功能</title>
    <style>
        .out_box{
            width: 960px;
            height: 100px;
            text-align: center;
        }
        .big_box{
            width: 960px;
            height: 440px;
            margin: auto;
            background: #ffffff;
            border-bottom: 3px solid red;
        }
        .left_box{
            float: left;
            width: 480px;
            background: #BBFFFF;
        }
        .right_box{
            float: right;
            background-color: #ffffff;
            width: 480px;
            text-align: center;
        }
        table{
            margin: auto;
            margin-top: 45px;
        }
        h2{
            margin-top: 80px;
        }
        .iput{
            width: 200px;
            height: 22px;
        }
        .iput1{
            width: 80px;
            height: 25px;
            color: white;
            background-color: blue;
        }
        .iput2{
            width: 80px;
            height: 25px;
            color: white;
            background-color: lightseagreen;
        }
    </style>
</head>
<body style="background-color:#BBFFFF ">
    <div class="out_box"><h1>图书管理后台登录</h1></div>
    <div class="big_box">
        <div class="left_box"><img src="images/b.jpg" alt=""></div>
        <div class="right_box">
            <h2>管理员登录</h2>
            <form name="frm" method="post" action="" onSubmit="return check()">
                <table>
                    <tr><td width="">
                            <label>用户名：<input type="text" name="username" id="username" class="iput"/></label>
                        </td></tr>
                    <tr><td>
                            <label>密　码：<input type="password" name="pwd" id="pwd" class="iput"/></label>
                        </td></tr>
                    <tr><td>
                            <label>验证码：<input name="code" type="text" id="code" maxlength="4" class="iput"/></label>
                        </td></tr>
                    <tr><td align="center">
                            <img src="verify.php" style="vertical-align:middle" />
                        </td></tr>
                    <tr><td align="center">
                            <input type="submit" name="Submit" value="登录" class="iput1">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="reset" name="Submit" value="重置" class="iput2">
                        </td></tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
