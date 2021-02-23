<?php
include("config.php");
require_once('book_check.php');
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>图书管理系统新书修改</title>
    <script type="text/javascript">
        function myform_Validator(theForm) {
            if (theForm.name.value == "") {
                alert("请输入书名。");
                theForm.name.focus();
                return (false);
            }
            if (theForm.price.value == "") {
                alert("请输入书名价格。");
                theForm.price.focus();
                return (false);
            }
            if (theForm.type.value == "") {
                alert("请输入书名所属类别。");
                theForm.type.focus();
                return (false);
            }
            return (true);
        }
    </script>
</head>
<?php
$sql="select * from info_books where id='".$_GET['id']."'";
$arr=mysqli_query($link,$sql);
$rows=mysqli_fetch_row($arr);
//mysqli_fetch_row() 函数从结果集中取得一行，并作为枚举数组返回。一条一条获取，输出结果为$rows[0],$rows[1],$rows[2].......
?>
<?php
if(@$_POST['action']=="modify"){
    $sqlstr = "update info_books set name = '".$_POST['name']."', price = '".$_POST['price']."', uploadtime = '".$_POST['uptime']."', type = '".$_POST['type']."', total = '".$_POST['total']."' where id='".$_GET['id']."'";
    $arry=mysqli_query($link,$sqlstr);
    if ($arry){
        echo "<script> alert('修改成功');location='book_list.php';</script>";
    }
    else{
        echo "<script>alert('修改失败');history.go(-1);</script>";
    }
}
?>
<body>
<form id="myform" name="myform" method="post" action="" onSubmit="return myform_Validator(this)">
    <table width="100%" height="173" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#ffffff">
        <tr>
            <td colspan="2" align="left" style="border-bottom: 5px solid #BBFFFF">&nbsp;后台管理&nbsp;&gt;&gt;&nbsp;新书修改</td>
        </tr>
        <tr>
            <td width="31%" align="right">书名：</td>
            <td width="69%">
                <input name="name" type="text" id="name" value="<?php echo $rows[1] ?>" size="15" maxlength="30" />
            </td>
        </tr>
        <tr>
            <td align="right">价格：</td>
            <td>
                <input name="price" type="text" id="price" value="<?php echo  $rows[2]; ?>" size="5" maxlength="15" />
            </td>
        </tr>
        <tr>
            <td align="right">入库时间：
            </td>
            <td>
                <label>
                    <input name="uptime" type="text" id="uptime" value="<?php echo $rows[3] ; ?>" size="17" />
                </label>
            </td>
        </tr>
        <tr>
            <td align="right">所属类别：
            </td>
            <td><label>
                    <input name="type" type="text" id="type" value="<?php echo $rows[4]; ?>" size="6" maxlength="19" />
                </label></td>
        </tr>
        <tr>
            <td align="right" style="border-bottom: 5px solid #BBFFFF">入库总量：</td>
            <td style="border-bottom: 5px solid #BBFFFF"><input name="total" type="text" id="total" value="<?php echo  $rows[5]; ?>" size="5" maxlength="15" />
                本</td>
        </tr>
        <tr>
            <td align="right">
                <input type="hidden" name="action" value="modify">
                <input type="submit" name="button" id="button" value="提交"/></td>
            <td>　　
                <input type="reset" name="button2" id="button2" value="重置"/></td>
        </tr>
    </table>
</form>
</body>
</html>

