<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
	<title>云知梦-视频下载</title>
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
	
<link rel="stylesheet" href="/yzm/Public/css/course.css">

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

<div class="container">
	<?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div class="course_block">
			<div class="course_top">
				<h4><span>云知梦</span><?php echo ($row[date]); ?>年<span>经典视频</span></h4>
				<p><?php echo ($row[info]); ?></p>
			</div>
			<?php if(is_array($row[next])): $k = 0; $__LIST__ = $row[next];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$download_row): $mod = ($k % 2 );++$k;?><div class="course_body">
					<li>
						<p class="l">编号<br><?php echo ($k); ?></p>
						<a class="l">[云知梦<?php echo ($download_row[date]); ?>年]<?php echo ($download_row[name]); ?></a>
						<div class="clear"></div>
						<span class="course_body_span">
							<img src="<?php echo C('UPLOADS'); echo ($download_row[img]); ?>" alt="" width="530px" height="208px">
							<ul class="r">
								<li><b>资源名称：</b><?php echo ($download_row[name]); ?></li>
								<li><b>资源简介：</b><?php echo ($download_row[brief]); ?></li>
								<li><b>资源大小：</b><?php echo ($download_row[size]); ?></li>
								<li>
									<?php if($download_row[url]): ?><a href="<?php echo ($download_row[url]); ?>" class="btn btn-success" target="_blank">观看</a><?php endif; ?>
									<a href="#modal" data-toggle="modal" class="btn btn-danger" target="_blank">下载</a>
								</li>
							</ul>
							<span class="clear"></span>
						</span>
					</li>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div class="modal fade" id="modal" tabindex="0" style="display:none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" data-dismiss="modal">&times;</button>
				<h4 class="model-title" id="modalLabel">视频下载温馨提示：</h4>
			</div>
			<div class="modal-body">
				<div class="row text-center">
					<img src="/yzm/Public/images/qrcode_wx.jpg" alt="云知梦微信二维码" width="300px" class="img-thumbnail">
				</div>
				<div class="row">
					<div class="alert alert-danger">
						<span>
							亲，谢谢您对云知梦一如既往的支持，没有大家的信任和鼓励，也就没有云知梦的今天。如想下载云知梦所有高清视频，请先关注云知梦官方微信，轻轻点击菜单【一键下载】即可获取下载地址和密码，再次感谢您的支持，有不妥之处还望见谅，谢谢!
						</span>
						<span class="glyphicon glyphicon-download-alt"></span><span class="glyphicon glyphicon-download-alt"></span>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>


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