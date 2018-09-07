<?php
/* Smarty version 3.1.31, created on 2018-09-07 10:29:36
  from "D:\phpStudy\WWW\phprap\application\home\view\project\tab.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b91e2908f1ba2_86380495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbe5bf9dabe6cf9e65469889ef3a1d3afd60bea1' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phprap\\application\\home\\view\\project\\tab.html',
      1 => 1536283687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b91e2908f1ba2_86380495 (Smarty_Internal_Template $_smarty_tpl) {
?>

<ul class="nav nav-tabs">
    <li class="<?php if ($_smarty_tpl->tpl_vars['tab']->value == 'home') {?>active<?php }?>"><a href="<?php echo url();?>
?tab=home">项目主页</a></li>
    <li class="<?php if ($_smarty_tpl->tpl_vars['tab']->value == 'member') {?>active<?php }?>"><a href="<?php echo url();?>
?tab=member">项目成员</a></li>
    <li class="<?php if ($_smarty_tpl->tpl_vars['tab']->value == 'map') {?>active<?php }?>"><a href="<?php echo url();?>
?tab=map">数据字典</a></li>
    <li class="hidden-xs <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'history') {?>active<?php }?>"><a href="<?php echo url();?>
?tab=history">项目动态</a></li>
</ul><?php }
}
