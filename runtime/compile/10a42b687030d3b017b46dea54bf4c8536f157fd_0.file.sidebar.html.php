<?php
/* Smarty version 3.1.31, created on 2018-09-07 09:48:06
  from "D:\phpStudy\WWW\phprap\application\admin\view\public\sidebar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b91d8d6ca55c3_19194032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10a42b687030d3b017b46dea54bf4c8536f157fd' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phprap\\application\\admin\\view\\public\\sidebar.html',
      1 => 1536283687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b91d8d6ca55c3_19194032 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">

        <ul class="nav" id="side-menu">

            <li>
                <a href="<?php echo url("admin");?>
"><i class="fa fa-home fa-fw"></i> 管理主页</a>
            </li>

            <li>
                <a href="<?php echo url('admin/project');?>
"><i class="fa fa-folder-open fa-fw"></i> 项目管理</a>
            </li>
            <li>
                <a href="<?php echo url('admin/user');?>
"><i class="fa fa-user fa-fw"></i> 用户管理</a>
            </li>

            <li>
                <a href="<?php echo url('admin/history/login');?>
"><i class="fa fa-history fa-fw"></i> 登录历史</a>
            </li>

            <li>
                <a href="<?php echo url('admin//db/index');?>
"><i class="fa fa-database fa-fw"></i> 数据备份</a>
            </li>

            <li>
                <a href="<?php echo url('admin/setting');?>
"><i class="fa fa-gear fa-fw"></i> 系统设置</a>
            </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div><?php }
}
