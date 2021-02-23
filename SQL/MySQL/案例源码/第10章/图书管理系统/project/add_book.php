<?php
include("config.php");
require_once('book_check.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>新书入库</title>
    <script type="text/javascript">
        function myform_Validator(theForm){
            if(theForm.name.value == ""){
                alert("请输入书名。");
                theForm.name.focus();
                return (false);
            }
            if(theForm.price.value == ""){
                alert("请输入书名价格。");
                theForm.price.focus();
                return (false);
            }
            if(theForm.type.value == ""){
                alert("请输入书名所属类别。");
                theForm.type.focus();
                return (false);
            }
            return (true);
        }
    </script>
</head>
<?php
if(@$_POST['action']=="insert"){
    $SQL = "INSERT INTO info_books (name,price,uploadtime,type,total,leave_number)
          values('".$_POST['name']."','".$_POST['price']."','".$_POST['uptime']."','".$_POST['type']."','".$_POST['total']."','".$_POST['total']."')";
    $arr=mysqli_query($link,$SQL);
    if ($arr){
        echo "<script language=javascript>alert('添加成功！');window.location='add_book.php'</script>";
    }
    else{
        echo "<script>alert('添加失败');history.go(-1);</script>";
    }
}
?>
<body>
<form id="myform" name="myform" method="post" action="" onsubmit="return myform_Validator(this)">
    <table width="100%" height="173" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#ffffff">
        <tr>
            <td colspan="2" align="left"  style="border-bottom: 5px solid #BBFFFF">&nbsp;后台管理&nbsp;&gt;&gt;&nbsp;新书入库</td>
        </tr>
        <tr>
            <td width="31%" align="right">书名：</td>
            <td width="69%">
                <input name="name" type="text" id="name" size="15" maxlength="30" />
            </td>
        </tr>
        <tr>
            <td align="right">价格：</td>
            <td>
                <input name="price" type="text" id="price" size="5" maxlength="15" />
            </td>
        </tr>
        <tr>
            <td align="right">日期：</td>
            <td>
                <input name="uptime" type="text" id="uptime" value="<?php echo date("Y-m-d h:i:s"); ?>" />
            </td>
        </tr>
        <tr>
            <td align="right">所属类别：</td>
            <td>
                <input name="type" type="text" id="type" size="6" maxlength="19" />
            </td>
        </tr>
        <tr>
            <td align="right" style="border-bottom: 5px solid #BBFFFF">入库总量：</td>
            <td style="border-bottom: 5px solid #BBFFFF"><input name="total" type="text" id="total" size="5" maxlength="15" />
                本</td>
        </tr>
        <tr>
            <td align="right">
                <input type="hidden" name="action" value="insert">
                <input type="submit" name="button" id="button" value="提交" />
            </td>
            <td>　　
                <input type="reset" name="button2" id="button2" value="重置" />
            </td>
        </tr>
    </table>
</form>
</body>
</html>