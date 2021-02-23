<?php
$db=@mysqli_connect('localhost','root','753951','adatabase')
or die("无法连接到服务器");  //连接数据库
//执行插入数据操作
$sq = "insert into user(Id,Name,Age,Gender,Info)
  values(4,'fangfang',18,'female','She is a 18 years lady')";
$result = mysqli_query($db,$sq); //$result为boolean类型
if ($result)  {
	echo "插入数据成功！<br/>";
} else {
	echo "插入数据失败！<br/>";
}
// 执行更新数据操作
$sq = "update user set Name='张芳' where Name='fangfang'";
$result = mysqli_query($db,$sq);
if($result) {
	echo "更新数据成功!<br/>";
} else {
	echo "更新数据失败!<br/>";
}
// 执行查询数据操作
$sq = "select * from user";
$result = mysqli_query($db,$sq);  // 如果查询成功，$result为资源类型，保存查询结果集

mysqli_close($db);
?>
