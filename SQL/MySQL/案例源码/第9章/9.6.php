<?php
//定义类
class guests{
     private $name;
     private $gender;
     function setname($name){
          $this->name = $name;
     }
//定义函数
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
$xiaoming = new guests;                  //生成实例
$xiaoming->setname("王小明");
$xiaoming->setgender("男");
$lili = new guests;
$lili->setname("李莉莉");
$lili->setgender("女");
echo $xiaoming->getname()."\t".$xiaoming->getgender()."<br>";
echo $lili->getname()."\t".$lili->getgender();
?> 
