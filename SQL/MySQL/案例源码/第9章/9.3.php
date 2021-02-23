<?php
function totalneedtopay($days,$roomprice){     	// 声明自定义函数
       $totalcost = $days*$roomprice;           	// 计算住宿费总价
		echo  "需要支付的总价:$totalcost"."元。";	// 计算住宿费总价
}
$rentdays = 3;     								//声明全局变量
$roomprice = 168;
totalneedtopay($rentdays,$roomprice);  			//通过变量传递参数
totalneedtopay(5,198);               				//直接传递参数值
?>
