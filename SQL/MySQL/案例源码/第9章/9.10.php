<?php
$db=@mysqli_connect('localhost','root','753951','adatabase')
or die("�޷����ӵ�������");  //�������ݿ�
mysqli_query("set names utf8");  //����MySQL���ַ���������������
//ִ�в�ѯ���ݲ���
$sq = "select * from user";
$result = mysqli_query($db,$sq); //�����ѯ�ɹ���$resultΪ��Դ���ͣ������ѯ�����
?>
<table width="370" border="1" cellspacing="0" cellpadding="0">
  <tr><th>���</th><th>����</th><th>����</th><th>�Ա�</th><th>������Ϣ</th></tr>
<?php 
  while($row = mysqli_fetch_row($result)){//���л�ȡ������еļ�¼������ʾ�ڱ����
?>
  <tr>
    <td><?php echo $row[0] ?></td>			<!-- ��ʾ��һ�� -->
    <td><?php echo $row[1] ?></td>			<!-- ��ʾ�ڶ��� -->
    <td><?php echo $row[2] ?></td>			<!-- ��ʾ������ -->
    <td><?php echo $row[3] ?></td>			<!-- ��ʾ������ -->
    <td><?php echo $row[4] ?></td>			<!-- ��ʾ������ -->
</tr>
<?php 
mysqli_close($db);
?>
