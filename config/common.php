<?php
//配置文件
/**
 * 接收输入的函数
 * @param string  ROOT 文件的地址
 * @param string  ROOT_HTML html 文件夹地址
 * @param string  ROOT_PHP php 文件夹地址
 */



//根目录
define('ROOT',substr(str_replace('\\','/',__DIR__),0,-6));
define("ROOT_HTML",ROOT.'html'.'/');
define("ROOT_PHP",ROOT.'php'.'/');



?>