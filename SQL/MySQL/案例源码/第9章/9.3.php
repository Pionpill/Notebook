<?php
function totalneedtopay($days,$roomprice){     	// �����Զ��庯��
       $totalcost = $days*$roomprice;           	// ����ס�޷��ܼ�
		echo  "��Ҫ֧�����ܼ�:$totalcost"."Ԫ��";	// ����ס�޷��ܼ�
}
$rentdays = 3;     								//����ȫ�ֱ���
$roomprice = 168;
totalneedtopay($rentdays,$roomprice);  			//ͨ���������ݲ���
totalneedtopay(5,198);               				//ֱ�Ӵ��ݲ���ֵ
?>
