<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<title>Login One</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo AdminCssUrl;?>bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo AdminCssUrl;?>templatemo_style.css">
</head>
<body class="templatemo-bg-gray">
<div class="container">
	<div class="col-md-12">
		<h1 class="margin-bottom-15">SIEMENS后台管理系统</h1>
		<form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="/Admin/Index/login" method="post">
			<div class="form-group">
				<div class="col-xs-12">
					<div class="control-wrapper">
						<label for="username" class="control-label fa-label"><span>用户名</span></label>
						<input type="text" class="form-control" id="username" placeholder="Username" name="admin_name" value="">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-12">
					<div class="control-wrapper">
						<label for="password" class="control-label fa-label"><span>密码</span></label>
						<input type="password" class="form-control" id="password" placeholder="Password" name="admin_pwd">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-12">
					<div class="control-wrapper">
						<label for="username" class="control-label fa-label"><span>验证码</span></label>
						<input type="text" id="inputCode" class="form-control" id="" placeholder="" name="captcha">
						<span id="code"><img src="/index.php/Admin/Index/VerifyImg" onclick="this.src='/index.php/Admin/Index/VerifyImg/' +Math.random()"></span>
						<P class="help-block">验证码不正确</P>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-12">
					<div class="checkbox control-wrapper">
						<!--<label>-->
						<!--<input id="remember" type="checkbox" > 记住用户名-->
						<!--</label>-->
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-12">
					<div class="control-wrapper">
						<input type="submit" value="进入管理中心" class="btn btn-info">
						<!-- <a href="forgot-password.html" class="text-right pull-right">忘记密码?</a> -->
					</div>
				</div>
			</div>
			<hr>

		</form>
		<script type="text/javascript" src="<?php echo AdminJsUrl;?>jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo AdminJsUrl;?>jquery.validate.min.js"></script>
		<script type="text/javascript" src="<?php echo AdminJsUrl;?>messages_zh.min.js"></script>
		<script type="text/javascript" src="<?php echo AdminJsUrl;?>js.KinerCode.js"></script>
		<script>


            $("#").click(function(){
                if($('#remember').is(':checked')==true){
                    $.ajax({
                        url:'remember',
                        data:{username:$("#username").val()},
                        type:'post',
                        success:function(msg){
                            // alert(msg)
                        }
                    })
                }else if($('#remember').is(':checked')==false){
                    $.ajax({
                        url:'remember',
                        data:{qingkong:1},
                        type:'post',
                        success:function(msg){
                            alert(msg)
                        }
                    })
                }

            })
		</script>

	</div>
</div>
</body>
</html>