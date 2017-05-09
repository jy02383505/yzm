<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
	<title>云知梦-作品展示</title>
	<link rel="shortcut icon" href="/yzm/Public/images/favicon.ico">
	<link rel="stylesheet" href="/yzm/Public/css/home.css">
	<link rel="stylesheet" href="/yzm/Public/bs/css/bootstrap.min.css">
	<link rel="stylesheet" href="/yzm/Public/jquery-ui/jquery-ui.min.css">
	<link rel="stylesheet" href="/yzm/Public/jquery-ui/jquery-ui.structure.min.css">
	<link rel="stylesheet" href="/yzm/Public/jquery-ui/jquery-ui.theme.min.css">
	<script src="/yzm/Public/bs/js/jquery.min.js"></script>
	<script src="/yzm/Public/jquery-ui/jquery-ui.min.js"></script>
	<script src="/yzm/Public/bs/js/bootstrap.min.js"></script>
	<script src="/yzm/Public/bs/js/holder.min.js"></script>
	
<link rel="stylesheet" href="/yzm/Public/css/production.css">

	<style>
	</style>
</title>
</head>
<body>
<!-- 顶部蓝条 -->
<div class="heads">
	<div class="row">
		<div class="container">
			<div class="col-md-6">
				<p class="pull-left">云知梦，只为有梦想的人</p>
			</div>
			<div class="col-md-6">
				<ul class="head-right">
					<li class="weixintitle">
						<span class="glyphicon glyphicon-qrcode" id="qrcode">
							<img class="weixin" width="100px" src="/yzm/Public/images/qrcode_wx.jpg" alt="">
						</span>
					</li>
					<li>
						<span class="glyphicon glyphicon-phone-alt"></span>
						<span class="phone">400-105-8680</span>
					</li>
					<!-- <li style="clear:both;"></li> -->
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- 蓝条下的导航条 -->
<nav style="height:103px">
	<div class="row" style="padding:20px 0px">
		<div class="container">
			<div class="col-md-2" style="margin-right:30px">
				<a href="<?php echo U('Index/index');?>">
					<img src="/yzm/Public/images/576e6fd4c090d.png" alt="云知梦" title="云知梦">
				</a>
			</div>

			<div class="col-md-9">
				<nav class="navbar">
					<ul class="nav navbar-nav navs-conts column">
						<li><a href="<?php echo U('Course/index');?>" alt="线下实训">线下实训</a></li>
						<li><a href="<?php echo U('Internet/index');?>" alt="线上教育">线上教育</a></li>
						<li><a href="<?php echo U('Team/index');?>" alt="师资团队">师资团队</a></li>
						<li><a href="<?php echo U('Employment/index');?>" alt="就业明星">就业明星</a></li>
						<li><a href="<?php echo U('Production/index');?>" alt="作品展示">作品展示</a></li>
						<li><a href="<?php echo U('Download/index');?>" alt="视频下载">视频下载</a></li>
						<li><a href="<?php echo U('Qq/index');?>" alt="技术交流">技术交流</a></li>
					</ul>
				</nav>
			</div>
		</div>	
	</div>
</nav>

<!-- 自定义幻灯片 -->

<div class="carouselWindow">
	<div class="image_list">
		<?php if(is_array($carousels)): $i = 0; $__LIST__ = $carousels;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$carousel): $mod = ($i % 2 );++$i;?><a href="<?php echo ($carousel[url]); ?>">
				<img src="<?php echo C('UPLOADS'); echo ($carousel[img]); ?>" alt="" width="1440px">
			</a><?php endforeach; endif; else: echo "" ;endif; ?>
		<?php $lastId = count($carousels) + 1; ?>
		<a href="carousel<?php echo ($lastId); ?>">
			<img src="<?php echo C('UPLOADS'); echo ($carousels[0][img]); ?>" alt="" width="1440px">
		</a>
		<div style="clear:both"></div>
	</div>
	<div class="indicator">
		<?php if(is_array($carousels)): $i = 0; $__LIST__ = $carousels;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$carousel): $mod = ($i % 2 );++$i;?><button data-target="#" rel="<?php echo ($i); ?>">
				<span class="glyphicon glyphicon-record"></span>
			</button><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>


<!-- 内容 -->

<div class="container" style="margin-top:10px;">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>
				<span class="glyphicon glyphicon-th-list"></span> 学员作品
			</h4>
			<p><?php echo C('PRODUCTION');?></p>
		</div>
	</div>
	<div class="col-md-12" style="margin-bottom:30px">
		<ul class="production_title">
			<?php if(!isset($_GET[q_t])){ $c_all = "production_active"; }else{ $c_all = ""; } ?>
			<li class="<?php echo ($c_all); ?>"><a href='<?php echo U("index");?>'>全部</a></li>
			<?php if(is_array($q_type)): $i = 0; $__LIST__ = $q_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$q_t): $mod = ($i % 2 );++$i; if($q_t == 0){ $t = "PHP基础项目"; $c = $q_t == $_GET[q_t]? "production_active": ""; }elseif($q_t == 1){ $t = "PHP高级项目"; $c = $q_t == $_GET[q_t]? "production_active": ""; }elseif($q_t == 2){ $t = "WEB前端项目"; $c = $q_t == $_GET[q_t]? "production_active": ""; }elseif($q_t == 3){ $t = "微信项目"; $c = $q_t == $_GET[q_t]? "production_active": ""; } ?>
				<li class="<?php echo ($c); ?>"><a href='<?php echo U("", "q_t=$q_t");?>'><?php echo ($t); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<div class="row production">
		<?php if(is_array($production)): $i = 0; $__LIST__ = $production;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$product): $mod = ($i % 2 );++$i;?><div class="col-md-4 product" style="height:200px;">
				<a href='<?php echo U("info", "id=$product[id]");?>'>
					<?php $img = explode(',', $product[imgs])[0]; ?>
					<img class="img-thumbnail img-responsive img-rounded" width="100%" src="<?php echo C('UPLOADS'); echo ($img); ?>" alt="">
				</a>
				<div class="student_body">
					<div class="student_left">
						<img src="<?php echo C('UPLOADS'); echo ($product[student_img]); ?>" alt="<?php echo ($product[student_name]); ?>" width="100px" style="height:100px" class="img-responsive img-circle">
					</div>
					<div class="student_right">
						<p><?php echo ($product[student_name]); ?>(<?php echo ($product[course_name]); ?>)</p>
						<p><?php echo ($product[name]); ?></p>
					</div>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>
<script>
	// 鼠标飘过的样式控制
	$('.product').hover(
		function(){
			$(this).children('.student_body').stop().slideDown(1000);
		},
		function(){
			$(this).children('.student_body').stop().slideUp(1000);
		}
	);
</script>


<!-- 回到顶部 -->
<div class="topBar">
	<span class="glyphicon glyphicon-chevron-up"></span>
</div>

<!-- 脚脚 -->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img src="/yzm/Public/images/footer_logo.png" alt="脚脚logo" class="footLogo">
			</div>
			<div class="col-md-6">
				<div class="footer-menu">
					<ul class="site-footer-links">
						<li><a href="<?php echo U('about');?>" target="_blank">关于我们</a></li>
						<li><a href="<?php echo U('contact');?>" target="_blank">联系我们</a></li>
						<li><a href="<?php echo U('question');?>" target="_blank">常见问题</a></li>
						<li><a href="<?php echo U('download');?>" target="_blank">资源下载</a></li>
						<li><a href="<?php echo U('qq');?>" target="_blank">技术交流</a></li>
					</ul>
				</div>
				<div class="copyright">
					©2013-2016 云知梦科技有限公司版权所有  晋ICP备14001940号-4
				</div>
			</div>
			<div class="col-md-3">
				<img style="margin-right:15px;" src="/yzm/Public/images/qrcode_wx.jpg" title="云知梦微信二维码" width="100px">	
				<img src="/yzm/Public/images/qrcode_wb.png" title="云知梦微博二维码" width="100px">	
			</div>
		</div>
	</div>
</div>
</body>
<script src="/yzm/Public/js/home.js"></script>
</html>