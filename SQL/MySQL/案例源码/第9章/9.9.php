<?php
$db=@mysqli_connect('localhost','root','753951','adatabase')
or die("无法连接到服务器");  //连接数据库
//执行查询数据操作
$sq = "select * from user";
$result = mysqli_query($db,$sq);  // 如果查询成功，$result为资源类型，保存查询结果集
echo "查询结果有". mysqli_num_rows($result). "条记录" <br/>;  //输出查询记录集的行数
// 执行更新数据操作
$sq = "update user set Name='mingming' where Name='张芳'";
$result = mysqli_query($db,$sq);
echo "更新了".mysqli_affected_rows($db). "条记录";  //输出更新记录集的行数
mysqli_close($db);
?>
