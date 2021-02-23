<?php
include("config.php");
require_once('book_check.php');
$SQL = "DELETE FROM info_books where id='".$_GET['id']."'";
$arry=mysqli_query($link,$SQL);
if($arry){
    echo "<script> alert('删除成功');location='book_list.php';</script>";
}
else
    echo "删除失败";
?>
