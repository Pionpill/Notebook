<?php
include("config.php");
require_once('book_check.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>图书查询</title>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#ffffff">
    <tr>
        <td width="80%" height="27" valign="top" bgcolor="#FFFFFF">&nbsp;后台管理&nbsp;&gt;&gt;&nbsp;图书查询</td>
    <tr>
        <td height="27" valign="top" bgcolor="#FFFFFF">
            <form id="form1" name="form1" method="post" action="" style="margin:0px; padding:0px;">
                <table width="45%" height="42" border="0" align="center" cellpadding="0" cellspacing="0">
                    <caption>请输入查询条件</caption>
                    <tr>
                        <td width="36%" align="center">
                            <select name="seltype" id="seltype">
                                <option value="id">图书序号</option>
                                <option value="name">图书名称</option>
                                <option value="price">图书价格</option>
                                <option value="time">入库时间</option>
                                <option value="type">图书类别</option>
                            </select>
                        </td>
                        <td width="31%" align="center">
                            <input type="text" name="coun" id="coun" />
                        </td>
                        <td width="33%" align="center">
                            <input type="submit" name="button" id="button" value="查询" />
                        </td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
</table>
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="1" bgcolor="#ffffff">
    <tr>
        <td width="7%" height="35" align="center" bgcolor="#FFFFFF">ID</td>
        <td width="28%" align="center" bgcolor="#FFFFFF">书名</td>
        <td width="12%" align="center" bgcolor="#FFFFFF">价格</td>
        <td width="24%" align="center" bgcolor="#FFFFFF">入库时间</td>
        <td width="12%" align="center" bgcolor="#FFFFFF">类别</td>
        <td width="24%" align="center" bgcolor="#FFFFFF">操作</td>
    </tr>
    <?php
    $pagesize = 8;  //每页显示数
    @$sql = "select * from info_books where ".$_POST['seltype']." like ('%".$_POST['coun']."%')";
    $rs=mysqli_query($link,$sql) or die("");
    $recordcount=mysqli_num_rows($rs);
    //mysql_num_rows() 返回结果集中行的数目。此命令仅对 SELECT 语句有效。
    $pagecount=($recordcount-1)/$pagesize+1;  //计算总页数
    $pagecount=(int)$pagecount;
    @$pageno = $_GET["pageno"];  //获取当前页
    if($pageno=="") {
        $pageno=1;   //当前页为空时显示第一页
    }
    if($pageno<1) {
        $pageno=1;  //当前页小于第一页时显示第一页
    }
    if($pageno>$pagecount) {
        $pageno=$pagecount;  //当前页数大于总页数时显示总页数
    }
    $startno=($pageno-1)*$pagesize;  //每页从第几条数据开始显示
    $sql="select * from info_books where ".$_POST['seltype']." like ('%".$_POST['coun']."%') order by id desc limit $startno,$pagesize";
    $rs=mysqli_query($link,$sql);
    ?>
    <?php while(@$rows=mysqli_fetch_assoc($rs)) {  ?>
        <tr align="center">
            <td width="7%"><?php echo $rows["id"]?></td>
            <td width="28%" height="26"><?php echo $rows["name"]?></td>
            <td width="12%" height="26"><?php echo $rows["price"]?></td>
            <td width="24%" height="26"><?php echo $rows["uploadtime"]?></td>
            <td width="12%" height="26"><?php echo $rows["type"]?></td>
            <td width="24%">
                <a href="update_book.php?id=<?php echo $rows['id'] ?>">修改</a>&nbsp;&nbsp;
                <a href="del_book.php?id=<?php echo $rows['id'] ?>">删除</a>
            </td>
        </tr>
    <?php }  ?>
    <tr>
        <th height="25" colspan="6" align="center">
            <?php if($pageno==1) { ?>
                首页 | 上一页 | <a href="?pageno=<?php echo $pageno+1?>">下一页</a> |
                <a href="?pageno=<?php echo $_POST['seltype']?>">末页</a>
                <?php } else if($pageno==$pagecount) { ?>
                <a href="?pageno=1">首页</a> | <a href="?pageno=<?php echo $pageno-1?>">上一页</a> | 下一页 | 末页
                <?php }  else { ?>
                <a href="?pageno=1">首页</a> | <a href="?pageno=<?php echo $pageno-1?>">上一页</a> |
                <a href="?pageno=<?php echo $pageno+1?>">下一页</a> |
                <a href="?pageno=<?php echo $pagecount?>">末页</a>
                <?php }  ?>
            &nbsp;页次：<?php echo $pageno ?>/<?php echo $pagecount ?>页&nbsp;共有<?php echo $recordcount?>条信息 </th>
    </tr>
</table>
</body>
</html>
