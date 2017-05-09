<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>云知梦-<?php echo ($row[title]); ?></title>
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
	
	<link rel="stylesheet" href="/yzm/Public/css/news.css">

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


<!-- 内容 -->

<div class="container news_container">
	<ol class="breadcrumb">
		<li><a href="<?php echo U('Index/index');?>">首页</a></li>
		<li><a href="<?php echo U('index');?>">新闻中心</a></li>
		<li class="active"><?php echo ($row[title]); ?></li>
	</ol>
	<div class="news_title">
		<h2 class="n_title"><?php echo ($row[title]); ?></h2>
		<span class="d_con_det">
			浏览：<?php echo ($row[browse_num]); ?> | 作者：<?php echo ($row[author]); ?> | 发表时间：<?php echo ($row[news_date]); ?>
		</span>
	</div>
	<!-- 上分页 -->
	<ul class="pages_up">
		<div class="page_direct">
			<div class="page_btn">
				<?php $prev = $row[id] - 1; $next = $row[id] + 1; ?>
					<!-- todo:id如果不连续呢？ -->
				<a href='<?php echo U("info", "id=$prev");?>' class="page_prev" title="上一篇"><</a>	
				<a href="<?php echo U('index');?>" class="page_center" title="返回列表">
					<span class="glyphicon glyphicon-th"></span>
				</a>
				<a href='<?php echo U("info", "id=$next");?>' class="page_next" title="下一篇">></a>
			</div>
		</div>
	</ul>

	<!-- 咨询内容 -->
	<div><?php echo ($row[info]); ?></div>

	<!-- 下分页 -->
	<ul class="pages_down">
		<div class="page_direct">
			<div class="page_btn">
				<a href='<?php echo U("info", "id=$prev");?>' class="page_prev" title="上一篇"><</a>	
				<a href="<?php echo U('index');?>" class="page_center" title="返回列表">
					<span class="glyphicon glyphicon-th"></span>
				</a>
				<a href='<?php echo U("info", "id=$next");?>' class="page_next" title="下一篇">></a>
			</div>
		</div>
	</ul>
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
<script>
	// 头部右边二维码图片
	$(function(){
		$('#qrcode').hover(function(){
			$('.weixin').show();
		}, 
			function(){
				$('.weixin').hide();
		})
	});

	// toTop
	$(window).scroll(function(){
		if($(this).scrollTop() >= 200){
			$('.topBar').stop().slideDown(500);
		}else{
			$('.topBar').stop().slideUp(500);
		}
	});
	$('.topBar').click(function(){
		$(window).scrollTop(0);
	});
	// 自定义幻灯片
	setInterval(function(){
		imgs = $(".carouselWindow img");
		imgs.eq(0).stop().fadeOut(1000, function(){
			$(this).show().appendTo(".carouselWindow");
		})
	}, 5000);

	$(window).scroll(function(){
		scrollTops=$(window).scrollTop();
		
		// 我们的课程
		if (scrollTops>3900) {
			$('.col-md-5').eq(7).addClass('animate');
		}else if (scrollTops>3600) {
			$('.col-md-5').eq(6).addClass('animate');
		}else if (scrollTops>3300) {
			$('.col-md-5').eq(5).addClass('animate');
		}else if (scrollTops>3000) {
			$('.col-md-5').eq(4).addClass('animate');
		}else if (scrollTops>2600) {
			$('.col-md-5').eq(3).addClass('animate');
		}else if(scrollTops>2300){
			$('.col-md-5').eq(2).addClass('animate');
		}else if(scrollTops>=2000){
			$('.col-md-5').eq(1).addClass('animate');
		}else if(scrollTops>=1700){
			$('.col-md-5').eq(0).addClass('animate');
		}else{
			$('.col-md-5').removeClass('animate');
		}
		
	});


</script>
</html>