<?php
/* Smarty version 3.1.39, created on 2021-05-08 11:06:44
  from 'D:\New_MaI\php\PHP面向对象\Snarty变量模板.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609600448515e5_16077718',
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
  'includes' => 
  array (
  ),
),false)) {
function content_609600448515e5_16077718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '31030102060960044805347_43691462';
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
    <!-- 判断 -->
    <?php if ((isset($_POST['name']))) {?> <?php echo $_POST['name'];?>
<br> <?php } else { ?> 数据不存在<br> <?php }?>

    <!-- 遍历输出 -->
    <!-- 1、foreach固有形式 -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'val');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['val']->value;?>
<br> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <!--采用smarty专用形式-->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?> 键:<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
,名字<?php echo $_smarty_tpl->tpl_vars['v']->value;?>

    <br> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <!-- 列表 -->
    <table border="1">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr1']->value, 'value', true);
$_smarty_tpl->tpl_vars['value']->show = ($_smarty_tpl->tpl_vars['value']->total > 0);
$_smarty_tpl->tpl_vars['value']->iteration = 0;
$_smarty_tpl->tpl_vars['value']->index = -1;
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['value']->iteration++;
$_smarty_tpl->tpl_vars['value']->index++;
$_smarty_tpl->tpl_vars['value']->first = !$_smarty_tpl->tpl_vars['value']->index;
$__foreach_value_2_saved = $_smarty_tpl->tpl_vars['value'];
?> <?php if ($_smarty_tpl->tpl_vars['value']->first) {?>
        <!-- 第一次循环 -->
        <tr>
            <th>下标</th>
            <th>循环次数</th>
            <th>值</th>
        </tr>
        <?php }?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->index;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->iteration;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
        </tr>
        <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
    <?php if ($_smarty_tpl->tpl_vars['value']->show) {?> 循环所有数据,一共循环了 <?php echo $_smarty_tpl->tpl_vars['value']->total;?>
次 <?php } else { ?> 循环失败,没有数值<?php }?>

    <!-- 判断是否有数据 -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr2']->value, 'var');
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['var']->value;?>
 <?php
}
if ($_smarty_tpl->tpl_vars['var']->do_else) {
?> 没有数据 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <!--遍历引索数组 -->
    <?php
$__section_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr3']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_id_0_total = min(($__section_id_0_loop - 0), 5);
$_smarty_tpl->tpl_vars['__smarty_section_id'] = new Smarty_Variable(array());
if ($__section_id_0_total !== 0) {
for ($__section_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_id']->value['index'] = 0; $__section_id_0_iteration <= $__section_id_0_total; $__section_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_id']->value['index']++){
?> <?php echo $_smarty_tpl->tpl_vars['arr3']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_id']->value['index'] : null)];?>
 <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_id']->value['index'] : null);?>
<br> <?php
}
}
?>

</body>

</html><?php }
}
