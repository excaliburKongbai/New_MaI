<?php
/* Smarty version 3.1.39, created on 2021-05-08 11:06:44
  from 'D:\New_MaI\php\PHP面向对象\Snarty变量模板.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60960044864ad9_88892847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a194114e55053faa433a1ea99fdf71a9c254f21' => 
    array (
      0 => 'D:\\New_MaI\\php\\PHP面向对象\\Snarty变量模板.html',
      1 => 1620443202,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => '3600',
),true)) {
function content_60960044864ad9_88892847 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 判断 -->
     数据不存在<br> 
    <!-- 遍历输出 -->
    <!-- 1、foreach固有形式 -->
     小明<br>  张大炮<br>  群星<br>  陈睿<br>     <!--采用smarty专用形式-->
     键:0,名字小明
    <br>  键:1,名字张大炮
    <br>  键:2,名字群星
    <br>  键:3,名字陈睿
    <br> 
    <!-- 列表 -->
    <table border="1">
                 <!-- 第一次循环 -->
        <tr>
            <th>下标</th>
            <th>循环次数</th>
            <th>值</th>
        </tr>
                <tr>
            <td>0</td>
            <td>1</td>
            <td>小明</td>
        </tr>
                 <tr>
            <td>1</td>
            <td>2</td>
            <td>张大炮</td>
        </tr>
                 <tr>
            <td>2</td>
            <td>3</td>
            <td>群星</td>
        </tr>
                 <tr>
            <td>3</td>
            <td>4</td>
            <td>陈睿</td>
        </tr>
            </table>
     循环所有数据,一共循环了 4次 
    <!-- 判断是否有数据 -->
     没有数据 
    <!--遍历引索数组 -->
     tank 0<br>  CCCP 1<br>  T72B 2<br>  CN 3<br>  ZTZ99 4<br> 
</body>

</html><?php }
}
