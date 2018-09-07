<?php
/* Smarty version 3.1.31, created on 2018-09-07 09:47:27
  from "D:\phpStudy\WWW\phprap\application\install\view\step4.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b91d8af5bad36_39357120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d7b4d9f96831826447c19eae943479c86477a3d' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phprap\\application\\install\\view\\step4.html',
      1 => 1536283687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b91d8af5bad36_39357120 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_include_file')) require_once 'D:\\phpStudy\\WWW\\phprap\\application\\common\\smarty\\function.include_file.php';
echo smarty_function_include_file(array('name'=>'public/header','title'=>'安装程序'),$_smarty_tpl);?>

<link href="<?php echo STATIC_URL;?>
/css/install.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="install-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">安装步骤四</h3>
                    </div>
                    <div class="panel-body">

                        <?php echo smarty_function_include_file(array('name'=>'public/nav','step'=>4),$_smarty_tpl);?>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div style="margin-bottom: 20px;">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tables']->value, 'table');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['table']->value) {
?>
                                            <p>创建数据表  <code><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
</code>  ……  成功</p>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


                                        </div>

                                        <div class="progress">
                                            <div id="processbar" class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                20%
                                            </div>
                                        </div>

                                        <div class="alert alert-warning fade in hidden js_alert">
                                            <strong>恭喜您，程序已经安装成功，为了安全考虑，强烈建议您立即删除application/install安装目录。</strong>
                                        </div>

                                        <div class="panel-button text-center">

                                            <a href="" class="btn btn-success js_admin disabled">程序安装中</a>

                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    
    <?php echo '<script'; ?>
>

        function setProcess(){
            var processbar = document.getElementById("processbar");
            processbar.style.width = parseInt(processbar.style.width) + 10 + "%";
            processbar.innerHTML = processbar.style.width;
            if(processbar.style.width == "100%"){

                $('.js_delete').removeClass('disabled');
                $('.js_alert').removeClass('hidden');

                $('.js_admin').attr('href', "<?php echo url('admin');?>
").text('管理接口文档').removeClass('disabled');

                window.clearInterval(bartimer);
            }
        }

        var bartimer = window.setInterval(function(){setProcess();},100);
        window.onload = function(){
            bartimer;
        }

        //百度统计
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?daf0d8924deff98ade7d56994ec572d8";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();

    <?php echo '</script'; ?>
>

    <?php echo smarty_function_include_file(array('name'=>'public/footer'),$_smarty_tpl);?>

<?php }
}
