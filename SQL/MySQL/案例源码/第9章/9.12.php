<?php 
  while($row = mysqli_fetch_object($result)) {		// ���л�ȡ������еļ�¼
?>
  <tr>
    <td><?php echo $row->Id ?></td>			<!-- ��ȡ��ǰ�С�Id���ֶ�ֵ -->
    <td><?php echo $row->Name ?></td>		<!-- ��ȡ��ǰ�С�Name���ֶ�ֵ -->
    <td><?php echo $row->Age ?></td>			<!-- ��ȡ��ǰ�С�Age���ֶ�ֵ -->
    <td><?php echo $row->Gender ?></td>		<!-- ��ȡ��ǰ�С�Gender���ֶ�ֵ -->
    <td><?php echo $row->Info ?></td>			<!-- ��ȡ��ǰ�С�Info���ֶ�ֵ -->
  </tr>
 <?php 
  }
?>
