<?php
/* Smarty version 3.1.31, created on 2018-09-07 09:48:00
  from "D:\phpStudy\WWW\phprap\application\admin\view\public\page.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b91d8d00d4687_01763745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f092ac9cba9563a027693e93e84317ae8fa450d0' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phprap\\application\\admin\\view\\public\\page.html',
      1 => 1536283687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b91d8d00d4687_01763745 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value->totalPages > 1) {?>
<div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
    <ul class="pagination">
        <li class=""><a aria-label="Previous"><span aria-hidden="true">共<?php echo $_smarty_tpl->tpl_vars['page']->value->totalPages;?>
页<?php echo $_smarty_tpl->tpl_vars['page']->value->totalRows;?>
条数据</span></a></li>
        <li class="paginate_button hidden-xs" aria-controls="dataTables-example"  >
            <a href="<?php echo $_smarty_tpl->tpl_vars['page']->value->start();?>
">首页</a>
        </li>
        <li class="paginate_button previous " aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous">
            <a href="<?php echo $_smarty_tpl->tpl_vars['page']->value->prev();?>
">上一页</a>
        </li>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value->numbers(), 'number');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['number']->value) {
?>
        <li class="paginate_button
        <?php if ($_smarty_tpl->tpl_vars['page']->value->nowPage == $_smarty_tpl->tpl_vars['number']->value->num) {?>
        active
        <?php }?>" >
            <a href="<?php echo $_smarty_tpl->tpl_vars['number']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['number']->value->num;?>
</a>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


        <li class="paginate_button next" id="dataTables-example_next">
            <a href="<?php echo $_smarty_tpl->tpl_vars['page']->value->next();?>
">下一页</a>
        </li>
        <li class="paginate_button hidden-xs" id="dataTables-example_next">
            <a href="<?php echo $_smarty_tpl->tpl_vars['page']->value->end();?>
">末页</a>
        </li>
    </ul>
</div>
<?php }
}
}
