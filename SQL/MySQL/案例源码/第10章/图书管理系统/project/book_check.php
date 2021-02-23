<?php
require_once("config.php");  //引入数据库文件
if($_SESSION["admin"]=="") {
    echo "<script language=javascript>alert('请重新登陆！');window.location='login.php'</script>";
}
?>
