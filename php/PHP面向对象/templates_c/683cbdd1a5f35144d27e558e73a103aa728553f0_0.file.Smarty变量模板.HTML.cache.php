<?php
/* Smarty version 3.1.39, created on 2021-05-08 08:37:50
  from 'D:\New_MaI\php\PHP面向对象\Smarty变量模板.HTML' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6095dd5e63b413_46753271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '683cbdd1a5f35144d27e558e73a103aa728553f0' => 
    array (
      0 => 'D:\\New_MaI\\php\\PHP面向对象\\Smarty变量模板.HTML',
      1 => 1620434249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6095dd5e63b413_46753271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '92046306095dd5e451392_09619459';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <!-- 标量数据 -->
        <h3><?php echo $_smarty_tpl->tpl_vars['hello']->value;?>
</h3>
        <br>
        <!-- 数组书记 -->
        <h3>
            <?php echo $_smarty_tpl->tpl_vars['arr']->value[2];?>
:<?php echo $_smarty_tpl->tpl_vars['arr']->value[0];?>
-<?php echo $_smarty_tpl->tpl_vars['arr']->value[1];?>

        </h3>
        <br>
        <!-- 对象数值 -->
        <h3>
            名字：<?php echo $_smarty_tpl->tpl_vars['obj']->value->name;?>
<br> 年龄：<?php echo $_smarty_tpl->tpl_vars['obj']->value->age;?>
岁
        </h3>
        <!-- 保留变量 -->
        <?php echo $_GET['user'];?>
<br> <?php echo dirname($_smarty_tpl->source->filepath);?>

    </div>

</body>

</html><?php }
}
