<?php
/* Smarty version 3.1.31, created on 2018-09-07 10:29:41
  from "D:\phpStudy\WWW\phprap\application\home\view\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b91e295ac3b73_82683230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b9aad6fa4c3269ff9caed420628df6be88baf63' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phprap\\application\\home\\view\\login.html',
      1 => 1536283687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b91e295ac3b73_82683230 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_include_file')) require_once 'D:\\phpStudy\\WWW\\phprap\\application\\common\\smarty\\function.include_file.php';
echo smarty_function_include_file(array('name'=>'public/header','title'=>'用户登录'),$_smarty_tpl);?>


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">用户登录</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="js_loginForm" action="<?php echo url('login');?>
" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="登录邮箱" name="email" type="email"  autocomplete="off" datatype="e" nullmsg="请输入登录邮箱！" errormsg="请输入合法的邮箱地址！">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="登录密码" name="password" type="password" value="" autocomplete="off" datatype="*6-20" nullmsg="请填写登录密码！" errormsg="请填写6-20个字符">
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['login_captcha']->value) {?>
                                <div class="form-group">
                                    <div class="input-group">

                                        <input type="text" name="code" class="form-control" datatype="*" nullmsg="请输入验证码！" placeholder="验证码，不区分大小写">

                                        <a class="input-group-btn verify-code">

                                            <img alt="点击刷新" title="点击刷新" onclick="reloadCode()" src="<?php echo url('login/code');?>
">

                                        </a>

                                    </div>

                                </div>
                                <?php }?>

                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" checked value="1">记住我
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="javascript:void(0);" class="btn btn-lg btn-success btn-block js_submit">立即登录</a>

                                <hr>

                                <a href="register.html" class="btn btn-default btn-block">还没有账号？免费注册</a>

                            </fieldset>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <hr>
        <p class="text-center"><?php echo get_config('copyright');?>
</p></p>
    </div>

    <?php echo '<script'; ?>
>

        // 刷新验证码
        var reloadCode = function() {

            var img = $(".verify-code").find('img');

            var src = img.attr("src").split('?');

            img.attr("src", src[0]+'?random='+new Date().getTime());

        }

        $(function(){

            //验证登录表单
            $("#js_loginForm").validateForm({
                success:function () {
                    window.location.href = "<?php echo url('project/select');?>
";
                },
                error:function () {
                    reloadCode();
                }
            });

            //enter回车登录
            $('.js_loginForm').enterSubmit();

        })

    <?php echo '</script'; ?>
>

    <?php echo smarty_function_include_file(array('name'=>'public/footer'),$_smarty_tpl);?>

<?php }
}
