<?php
/* Smarty version 3.1.31, created on 2018-09-07 10:29:36
  from "D:\phpStudy\WWW\phprap\application\home\view\notify\load.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b91e290782845_33501400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b1ac9f36c06236c07850364bf121d7d232dcf4c' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phprap\\application\\home\\view\\notify\\load.html',
      1 => 1536283687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b91e290782845_33501400 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php $_smarty_tpl->_assignInScope('notifys', \app\notify::get_notify_list());
?>
    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);">
        <i class="fa fa-bell fa-fw"></i><span class="badge js_notifyNum"><?php echo count($_smarty_tpl->tpl_vars['notifys']->value);?>
</span> <i class="fa fa-caret-down"></i>
    </a>

    <?php if ($_smarty_tpl->tpl_vars['notifys']->value) {?>
    <ul class="dropdown-menu dropdown-alerts">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifys']->value, 'notify');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notify']->value) {
?>
        <?php $_smarty_tpl->_assignInScope('user_id', $_smarty_tpl->tpl_vars['notify']->value['user_id']);
?>
        <li>
            <div class="notify-item">

                <span class="alert-link"><?php echo $_smarty_tpl->tpl_vars['notify']->value['user_name'];?>
</span>
                <?php echo $_smarty_tpl->tpl_vars['notify']->value['type'];?>

                <span class="alert-link"><?php echo $_smarty_tpl->tpl_vars['notify']->value['message'];?>
</span>
                <span class="text-muted small"><?php echo pass_time($_smarty_tpl->tpl_vars['notify']->value['add_time']);?>
</span>
                <span class="pull-right text-muted small">
                    <a class="js_cleanSingleNotify" title="关闭通知" href="javascript:void(0);" data-id="<?php echo $_smarty_tpl->tpl_vars['notify']->value['id'];?>
">
                        <span class="fa fa-eye-slash fa-fw"></span>
                    </a>
                </span>

            </div>
        </li>
        <li class="divider"></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


        <li>
            <div class="text-center">

                <a href="<?php echo url('apply');?>
" style="padding: 0"><button type="button" class="btn btn-xs btn-success">查看全部</button></a>
                <a href="javascript:void(0);" style="padding: 0"><button type="button" class="btn btn-xs btn-warning js_cleanAllNotify">清空全部</button></a>
            </div>
        </li>
    </ul>

    <?php }
}
}
