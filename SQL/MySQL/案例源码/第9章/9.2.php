<?php
function sayhello($customer){            //自定义函数sayhello
   return $customer.", 欢迎您来到润慧酒店。";
}
echo sayhello('张先生');                  //调用函数sayhello
?>
