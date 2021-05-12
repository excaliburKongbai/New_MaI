<?php
/* Smarty version 3.1.39, created on 2021-05-07 20:10:32
  from 'D:\New_MaI\php\PHP面向对象\Smarty模板.HTML' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60952e387c01b8_51503612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d7531b5512fcda893dc5645bde0852fefba64f8' => 
    array (
      0 => 'D:\\New_MaI\\php\\PHP面向对象\\Smarty模板.HTML',
      1 => 1620389429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60952e387c01b8_51503612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '70922006960952e385ebd93_70993938';
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

    </div>

</body>

</html><?php }
}
