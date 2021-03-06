<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>云知梦后台登录</title>
	<link rel="stylesheet" href="/yzm/Public/bs/css/bootstrap.min.css">
	<script src="/yzm/Public/bs/js/jquery.min.js"></script>
	<script src="/yzm/Public/bs/js/bootstrap.min.js"></script>
	<script src="/yzm/Public/bs/js/holder.min.js"></script>
	<style>
		*{
			font-family: 黑体;
		}
		#login{
			margin: 0 auto;
			margin-top: 30px;
			width: 320px;
		}	
		.fspan{
			border: #000 solid 1px;
			border-radius: 4px;
			padding: 4px;
		}
		.rhino{
			width: 256px;
			height: 256px;
			border-radius: 128px;
			overflow: hidden;
			position: absolute;
			cursor: move;
		}
		.rhino img{
			margin-left: -565px;
			margin-top: -50px;
			transform: scale(0.8, 0.8);
		}
	</style>
</title>
</head>
<body>
<div class="rhino">
	<img src="/yzm/Public/images/index.jpg">
</div>
<div class="container" id="login">
	<div class="panel panel-primary">
		<div class="panel-heading"><h4>用户登录</h4></div>
		<div class="panel-body">
			<form action="<?php echo U('Login/login');?>" class="form" method="post">
				<div class="form-group">
					<label>用户名</label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label>密码</label>
					<input type="text" name="password" class="form-control">
				</div>
				<div class="form-group">
					<label>验证码<span class="fspan"><img src="<?php echo U('Login/verify');?>" alt="验证码图片" onclick=this.src="<?php echo U('Login/verify');?>"></span></label>
					<input placeholder="验证码" type="text" name="fcode" class="form-control">
				</div>
				<div class="form-group text-center">
					<input type="submit" class="btn btn-primary"> 
					<input type="reset" value="重置" class="btn btn-danger">
				</div>
			</form>	
		</div>
	</div>
</div>
</body>
<script>
	// 验证码样式
	fspan = $('.fspan');
	finput = $('input[name="fcode"]');
	fspan.css('display', 'none');
	finput.focus(function(){
		fspan.slideDown();
	});
	finput.blur(function(){
		fspan.slideUp();
	});

	rhino = $('.rhino');
	// 设置鼻祖随机位置
	// function randomPosition(event){
	// 	rhino.css({
	// 		'left': Math.random() * event.clientX + 'px';
	// 		'top': Math.random() * event.clientY + 'px';
	// 	})
	// }
	// randomPosition();

	// 拖动鼻祖
	function drag(obj){
		rhino.bind('mousedown', start);

		function start(event){
			dX = event.clientX - obj.offset().left;
			dY = event.clientY - obj.offset().top;

			$(document).bind('mousemove', move);
			$(document).bind('mouseup', stop);

			return false;
		}

		function move(event){
			obj.css({
				'left': event.clientX - dX + 'px',
				'top': event.clientY - dY + 'px',
			})
			return false;
		}

		function stop(){
			$(document).unbind('mousemove', move);
			$(document).unbind('mouseup', stop);
		}
	}

	drag(rhino);
</script>
</html>