<?php
$db=@mysqli_connect('localhost','root','753951','adatabase')
or die("�޷����ӵ�������");  //�������ݿ�
//ִ�в�ѯ���ݲ���
$sq = "select * from user";
$result = mysqli_query($db,$sq);  // �����ѯ�ɹ���$resultΪ��Դ���ͣ������ѯ�����
echo "��ѯ�����". mysqli_num_rows($result). "����¼" <br/>;  //�����ѯ��¼��������
// ִ�и������ݲ���
$sq = "update user set Name='mingming' where Name='�ŷ�'";
$result = mysqli_query($db,$sq);
echo "������".mysqli_affected_rows($db). "����¼";  //������¼�¼��������
mysqli_close($db);
?>
