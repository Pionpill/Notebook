<?php
include("config.php");
require_once('book_check.php');
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>图书统计</title>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#BBFFFF">
    <tr>
        <td height="27" colspan="2" align="left" bgcolor="#FFFFFF">&nbsp;后台管理&nbsp;&gt;&gt;&nbsp;图书统计</td>
    </tr>
    <tr>
        <td align="center" bgcolor="#FFFFFF" height="27">图书类别</td>
        <td align="center" bgcolor="#FFFFFF">库内图书</td>
    </tr>
    <?php
    $sql="select type, count(*) from info_books group by type";
    $val=mysqli_query($link,$sql);
    while($arr=mysqli_fetch_row($val)){
        echo "<tr height='30'>";
        echo "<td align='center' bgcolor='#FFFFFF'>".$arr[0]."</td>";
        echo "<td align='center' bgcolor='#FFFFFF'>本类目共有：".$arr[1]."&nbsp;种</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>