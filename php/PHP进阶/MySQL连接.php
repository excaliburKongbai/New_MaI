<?php
header('Content-type:text/html;charser=utf-8');
$link = @mysqli_connect('localhost','root','root','news');
if(!$link){
    exit('数据库连接失败：' . mysqli_connect_error());
}
mysqli_set_charset($link, 'utf8');

?>