<?php
$db=@mysqli_connect('localhost','root','753951','adatabase')
or die("�޷����ӵ�������");  //�������ݿ�
//ִ�в������ݲ���
$sq = "insert into user(Id,Name,Age,Gender,Info)
  values(4,'fangfang',18,'female','She is a 18 years lady')";
$result = mysqli_query($db,$sq); //$resultΪboolean����
if ($result)  {
	echo "�������ݳɹ���<br/>";
} else {
	echo "��������ʧ�ܣ�<br/>";
}
// ִ�и������ݲ���
$sq = "update user set Name='�ŷ�' where Name='fangfang'";
$result = mysqli_query($db,$sq);
if($result) {
	echo "�������ݳɹ�!<br/>";
} else {
	echo "��������ʧ��!<br/>";
}
// ִ�в�ѯ���ݲ���
$sq = "select * from user";
$result = mysqli_query($db,$sq);  // �����ѯ�ɹ���$resultΪ��Դ���ͣ������ѯ�����

mysqli_close($db);
?>
