<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
	<title>云知梦- 太原PHP培训|山西PHP培训|PHP培训|PHP视频|PHP学习|太原PHP开发|山西PHP开发</title>
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
	
	<link rel="stylesheet" href="/yzm/Public/countDown/css/countdown.css">
	<script src="/yzm/Public/countDown/js/countdown.js"></script>
	<script src="/yzm/Public/countDown/js/flip_counter.js"></script>

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

	<!-- 开班信息 -->
	<div class="container courseRows">
		<?php if(is_array($coursePlans)): $i = 0; $__LIST__ = $coursePlans;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$coursePlan): $mod = ($i % 2 );++$i;?><div class="row">
				<div class="col-md-2 courseName"><?php echo ($coursePlan[name]); ?></div>
				<div class="col-md-2 courseDate"><?php echo ($coursePlan[course_date]); ?></div>
				<div class="col-md-2 courseStatus">
					<?php if($coursePlan[status] == 0): ?>火热报名<span class='glyphicon glyphicon-fire fire'></span>
					<?php else: ?>
						盛大开班<span class="glyphicon glyphicon-flag flag"></span><?php endif; ?>
				</div>
				<div class="col-md-4 courseImg">
					<?php if($coursePlan[status] == 0): ?><div id="hero_outer">
							<div class="hero">
							<div id="flip-counter_<?php echo ($i); ?>" class="flip-counter" data-date="<?php echo ($coursePlan[course_date]); ?>"></div>
							</div>
						</div>
					<?php else: ?>
						<img src="/yzm/Public/images/ttt.gif"><?php endif; ?>
				</div>
				<div class="col-md-2 courseUrl">
					<?php if($coursePlan[status] == 0): ?><a href="">在线报名</a>
					<?php else: ?>
						<a href="<?php echo U('OurHistory/index');?>">了解更多</a><?php endif; ?>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		<div class="text-center">
			<a href="<?php echo U('CoursePlan/index');?>" class="btn btn-lg btn-warning">更多开班信息>></a>
		</div>
	</div>

	<!-- 新闻资讯 -->
	<div class="container">
		<img width="100%" src="/yzm/Public/images/news.jpg" alt="新闻栏目基线" class="newStart">
		<div class="row news">
			<?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$one): $mod = ($i % 2 );++$i;?><div class="col-md-6">
					<div class="media">
						<div class="media-left media-middle">
							<a href="<?php echo U('OurHistory');?>/id/<?php echo ($one[id]); ?>"><img src="<?php echo C('UPLOADS'); echo ($one[img]); ?>" alt="" width="200px" height="130px"></a>	
						</div>
						<div class="media-body"><h4><a href="<?php echo U('OurHistory');?>/id/<?php echo ($one[id]); ?>"><?php echo ($one[title]); ?></a></h4><p><a href="<?php echo U('OurHistory');?>/id/<?php echo ($one[id]); ?>"><?php echo ($one[brief_info]); ?>...[详细信息]</a></p><p style="text-align:right;margin-right:0px;"><?php echo (substr($one[news_date],0,10)); ?></p></div>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="text-center">
			<a href="<?php echo U('OurHistory/index');?>" class="btn btn-lg btn-warning">我们的历史>></a>
		</div>
	</div>

	<!-- 线下实训 -->
	<div class="container">
		<img src="/yzm/Public/images/course.jpg" width="100%" alt="线下实训基线">
		<div class="row course">
			<?php if(is_array($courses)): $i = 0; $__LIST__ = $courses;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$course): $mod = ($i % 2 );++$i; if(($mod) == "0"): ?><div class="col-md-5">
						<a href="<?php echo U('course');?>"><img width="100%" src="<?php echo C('UPLOADS'); echo ($course[img]); ?>" alt="" class="img-thumbnail img-responsive animate"></a>
					</div>
					<div class="col-md-7">
						<h2 class="page-header"><?php echo ($course[name]); ?></h2>
						<p class="lead"><?php echo ($course[info]); ?></p>
					</div><?php endif; ?>
				<?php if(($mod) == "1"): ?><div class="col-md-7">
						<h2 class="page-header"><?php echo ($course[name]); ?></h2>
						<p class="lead"><?php echo ($course[info]); ?></p>
					</div>
					<div class="col-md-5">
						<a href="<?php echo U('course');?>"><img width="100%" src="<?php echo C('UPLOADS'); echo ($course[img]); ?>" alt="" class="img-thumbnail img-responsive animate"></a>
					</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="text-center">
			<a href="<?php echo U('Course/index');?>" class="btn btn-lg btn-warning">更多线下课程>></a>
		</div>
	</div>

	<!-- 线上教育 -->
	<div class="container">
		<img src="/yzm/Public/images/internet.jpg" width="100%" alt="线上教育基线">
		<div class="row internet">
			<?php if(is_array($internets)): $i = 0; $__LIST__ = $internets;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$internet): $mod = ($i % 2 );++$i; if(($mod) == "0"): ?><div class="col-md-5">
						<a href="<?php echo U('internet');?>"><img width="100%" src="<?php echo C('UPLOADS'); echo ($internet[img]); ?>" alt="" class="img-thumbnail img-responsive animate"></a>
					</div>
					<div class="col-md-7">
						<h2 class="page-header"><?php echo ($internet[name]); ?></h2>
						<p class="lead"><?php echo ($internet[info]); ?></p>
					</div><?php endif; ?>
				<?php if(($mod) == "1"): ?><div class="col-md-7">
						<h2 class="page-header"><?php echo ($internet[name]); ?></h2>
						<p class="lead"><?php echo ($internet[info]); ?></p>
					</div>
					<div class="col-md-5">
						<a href="<?php echo U('internet');?>"><img width="100%" src="<?php echo C('UPLOADS'); echo ($internet[img]); ?>" alt="" class="img-thumbnail img-responsive animate"></a>
					</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="text-center">
			<a href="<?php echo U('Internet/index');?>" class="btn btn-lg btn-warning">更多线上课程>></a>
		</div>
	</div>

	<!-- 师资团队 -->
	<div class="container">
		<img src="/yzm/Public/images/team.jpg" alt="师资团队基线" width="100%">
		<div class="row team">
			<?php if(is_array($teams)): $i = 0; $__LIST__ = $teams;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$team): $mod = ($i % 2 );++$i;?><div class="col-md-4">
					<div class="thumbnail text-center teacher">
						<img src="<?php echo C('UPLOADS'); echo ($team[portrait]); ?>" class="img-responsive img-circle img-thumbnail" alt="">
						<div class="caption" style="height:200px;">
							<h3><?php echo ($team[name]); ?></h3><p><?php echo ($team[info]); ?></p>
						</div>
					</div>	
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="text-center">
			<a href="<?php echo U('Team/index');?>" class="btn btn-lg btn-warning">更多老师资源>></a>
		</div>
	</div>

	<!-- 就业明星 -->
	<div class="container">
		<img src="/yzm/Public/images/student.jpg" alt="就业明星基线" width="100%" class="img-responsive">
		<div class="row student">
			<?php if(is_array($students)): $i = 0; $__LIST__ = $students;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$student): $mod = ($i % 2 );++$i;?><div class="col-md-3 stu">
					<div class="thumbnail text-center">
						<img src="<?php echo C('UPLOADS'); echo ($student[img]); ?>" class="img-responsive img-thumbnail">
						<div class="caption">
							<h3><?php echo ($student[course_name]); ?> <?php echo ($student[name]); ?></h3>
							<p><?php echo ($student[company]); ?></p>
							<p><?php echo ($student[position]); ?></p>
						</div>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="text-center">
			<a href="<?php echo U('Employment/index');?>" class="btn btn-lg btn-warning">更多就业信息>></a>
		</div>
	</div>

	<!-- 教学环境 -->
	<div class="container">
		<img src="/yzm/Public/images/env.jpg" alt="教学环境基线" class="img-responsive" width="100%">
		<div class="row classroom">
			<?php if(is_array($classrooms)): $i = 0; $__LIST__ = $classrooms;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classroom): $mod = ($i % 2 );++$i;?><div class="col-md-4 clsrm">
					<img class="img-thumbnail" width="100%" src="<?php echo C('UPLOADS'); echo ($classroom[img]); ?>" alt="">
					<p><?php echo ($classroom[name]); ?></p>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="text-center">
			<a href="<?php echo U('Team/index');?>" class="btn btn-lg btn-warning">去实地考察一下吧</a>
		</div>
	</div>

	<!-- 下面那个曲线图 -->
	<div class="container progressing">
		<img src="/yzm/Public/images/37.png" width="100%">
		<div class="one">
			<a href="javascript:" class="communication_online">
				<p>在线交流</p>
			</a>
		</div>
		<div class="two">
			<a href="javascript:" class="communicate_with_us">
				<p>美女聊天</p>
			</a>
		</div>
		<div class="three">
			<a href="javascript:" class="communicate_with_us">
				<p>帅锅聊天</p>
			</a>
		</div>
		<div class="four">
			<a href="<?php echo U('Download');?>" class="communicate_with_us">
				<p>开始学习</p>
			</a>
		</div>
	</div>

	<!-- 友情链接 -->
	<div class="linka">
		<div class="container">
			<div class="title links">友情链接:</div>
			<ul class="linkc">
				<li>
					<a href="http://v.tudou.com/lqqhwei" target="_blank">土豆优酷</a>
				</li>
				<li>
					<a href="http://tieba.baidu.com/f?kw=%E4%BA%91%E7%9F%A5%E6%A2%A6" target="_blank">百度贴吧</a>
				</li>
				<li>
					<a href="http://www.maiziedu.com/" target="_blank">麦子学院</a>
				</li>
				<li>
					<a href="http://www.tanzhouedu.com" target="_blank">潭州学院</a>
				</li>
				<li>
					<a href="http://lampym.lofter.com/" target="_blank">网易轻博客</a>
				</li>
				<li>
					<a href="http://edu.51cto.com/lecturer/index/user_id-367379.html" target="_blank">51CTO</a>
				</li>
				<li>
					<a href="http://study.163.com/u/lampym" target="_blank">网易云课堂</a>
				</li>
				<li>
					<a href="http://www.ucai.cn" target="_blank">优才学院</a>
				</li>
				<li>
					<a href="http://ke.qq.com" target="_blank">腾讯课堂</a>
				</li>
				<li>
					<a href="http://www.imooc.com" target="_blank">慕课网</a>
				</li>
				<li>
					<a href="http://www.weibo.com/lampym" target="_blank">新浪微博</a>
				</li>
				<li>
					<a href="http://www.jikexueyuan.com" target="_blank">极客学院</a>
				</li>
				<li>
					<a href="http://sh.jiaoyubao.cn" target="_blank">教育宝</a>
				</li>
			</ul>
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
<script src="/yzm/Public/js/home.js"></script>

<script>
$(function() {
	// 教室图片特效
	$('.clsrm>img').hover(
		function(){
			$(this).next().stop().slideDown(1000);
		},
		function(){
			$(this).next().stop().slideUp(1000);
		}
	)
	// 多个倒计时
	$('.flip-counter').each(function(i){
		myCountDown(this.id);
	})
});

</script>

</body>
</html>