<?php
$db=@mysqli_connect('localhost','root','753951','adatabase')
or die("无法连接到服务器");  //连接数据库
mysqli_query("set names utf8");  //设置MySQL的字符集，以屏蔽乱码
//执行查询数据操作
$sq = "select * from user";
$result = mysqli_query($db,$sq); //如果查询成功，$result为资源类型，保存查询结果集
?>
<table width="370" border="1" cellspacing="0" cellpadding="0">
  <tr><th>编号</th><th>姓名</th><th>年龄</th><th>性别</th><th>个人信息</th></tr>
<?php 
  while($row = mysqli_fetch_row($result)){//逐行获取结果集中的记录，并显示在表格中
?>
  <tr>
    <td><?php echo $row[0] ?></td>			<!-- 显示第一列 -->
    <td><?php echo $row[1] ?></td>			<!-- 显示第二列 -->
    <td><?php echo $row[2] ?></td>			<!-- 显示第三列 -->
    <td><?php echo $row[3] ?></td>			<!-- 显示第四列 -->
    <td><?php echo $row[4] ?></td>			<!-- 显示第五列 -->
</tr>
<?php 
mysqli_close($db);
?>
