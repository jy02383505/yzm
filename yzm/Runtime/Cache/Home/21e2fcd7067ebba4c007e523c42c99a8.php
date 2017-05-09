<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>云知梦-新闻资讯</title>
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
		<?php if(is_array($carousels)): $i = 0; $__LIST__ = $carousels;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$carousel): $mod = ($i % 2 );++$i;?><img src="<?php echo C('UPLOADS'); echo ($carousel[img]); ?>" alt="" width="100%"><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>


<!-- 内容 -->

<div class="container" style="margin-top:10px;">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>
				<span class="glyphicon glyphicon-th-list"></span> 新闻资讯
			</h4>
			<p><?php echo C('OURHISTORY');?></p>
		</div>
	</div>
	<!-- 新闻资讯 -->
	<div class="container">
		<div class="row news">
			<?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$one): $mod = ($i % 2 );++$i;?><div class="col-md-6">
					<div class="media">
						<div class="media-left media-middle">
							<a href="<?php echo U('OurHistory/info');?>/id/<?php echo ($one[id]); ?>"><img src="<?php echo C('UPLOADS'); echo ($one[img]); ?>" alt="" width="200px" height="130px"></a>	
						</div>
						<div class="media-body"><h4><a href="<?php echo U('OurHistory/info');?>/id/<?php echo ($one[id]); ?>"><?php echo ($one[title]); ?></a></h4><p><a href="<?php echo U('OurHistory/info');?>/id/<?php echo ($one[id]); ?>"><?php echo ($one[brief_info]); ?>...[详细信息]</a></p><p style="text-align:right;margin-right:0px;"><?php echo (substr($one[news_date],0,10)); ?></p></div>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
	<div class="text-center">
		<?php echo ($pagination); ?>
	</div>
</div>
<script>
	$('.product').hover(
		function(){
			$(this).children('div').stop().slideDown(1000);
		},
		function(){
			$(this).children('div').stop().slideUp(1000);
		}
	);
	$('.production_title>li').click(function(){
		$('.production_title>li').removeClass('production_title');
		$(this).addClass('production_active');
	})

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