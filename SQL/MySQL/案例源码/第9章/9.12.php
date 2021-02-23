<?php 
  while($row = mysqli_fetch_object($result)) {		// 逐行获取结果集中的记录
?>
  <tr>
    <td><?php echo $row->Id ?></td>			<!-- 获取当前行“Id”字段值 -->
    <td><?php echo $row->Name ?></td>		<!-- 获取当前行“Name”字段值 -->
    <td><?php echo $row->Age ?></td>			<!-- 获取当前行“Age”字段值 -->
    <td><?php echo $row->Gender ?></td>		<!-- 获取当前行“Gender”字段值 -->
    <td><?php echo $row->Info ?></td>			<!-- 获取当前行“Info”字段值 -->
  </tr>
 <?php 
  }
?>
