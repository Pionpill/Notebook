<?php
//������
class guests{
     private $name;
     private $gender;
     function setname($name){
          $this->name = $name;
     }
//���庯��
     function getname(){
           return $this->name;
     }
     function setgender($gender){
          $this->gender = $gender;
     }
     function getgender(){
           return $this->gender;
     }
};
$xiaoming = new guests;                  //����ʵ��
$xiaoming->setname("��С��");
$xiaoming->setgender("��");
$lili = new guests;
$lili->setname("������");
$lili->setgender("Ů");
echo $xiaoming->getname()."\t".$xiaoming->getgender()."<br>";
echo $lili->getname()."\t".$lili->getgender();
?> 
