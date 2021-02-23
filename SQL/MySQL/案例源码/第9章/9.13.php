<?php 
while($row = mysqli_fetch_array($result)) {		// 逐行获取结果集中的记录
?>
  <tr>
    <td><?php echo $row["Id"] ?></td>	   		// 使用字段名做索引显示字段值
    <td><?php echo $row["1"] ?></td>		    // 使用数字做索引显示字段值
    <td><?php echo $row["Age"] ?></td>     	 
    <td><?php echo $row["3"] ?></td>		
    <td><?php echo $row["Info"] ?></td>	
  </tr>
 <?php 
  }
?>
