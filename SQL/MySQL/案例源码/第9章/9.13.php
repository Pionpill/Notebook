<?php 
while($row = mysqli_fetch_array($result)) {		// ���л�ȡ������еļ�¼
?>
  <tr>
    <td><?php echo $row["Id"] ?></td>	   		// ʹ���ֶ�����������ʾ�ֶ�ֵ
    <td><?php echo $row["1"] ?></td>		    // ʹ��������������ʾ�ֶ�ֵ
    <td><?php echo $row["Age"] ?></td>     	 
    <td><?php echo $row["3"] ?></td>		
    <td><?php echo $row["Info"] ?></td>	
  </tr>
 <?php 
  }
?>
