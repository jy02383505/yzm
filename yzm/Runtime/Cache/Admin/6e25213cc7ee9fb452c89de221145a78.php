<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/yzm/Public/bs/css/bootstrap.min.css">
	<link rel="stylesheet" href="/yzm/Public/jquery-ui/jquery-ui.min.css">
	<link rel="stylesheet" href="/yzm/Public/jquery-ui/jquery-ui.theme.min.css">
	<link rel="stylesheet" href="/yzm/Public/jquery-ui/jquery.datetimepicker.css">
	<script src="/yzm/Public/bs/js/jquery.min.js"></script>
	<script src="/yzm/Public/jquery-ui/jquery-ui.min.js"></script>
	<script src="/yzm/Public/jquery-ui/jquery.datetimepicker.full.js"></script>
	<script src="/yzm/Public/bs/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="/yzm/Public/countDown/css/countdown.css">
	<script src="/yzm/Public/countDown/js/countdown.js"></script>
	<script src="/yzm/Public/countDown/js/flip_counter.js"></script>
	<style>
		ul li{
			float: right;
			list-style: none;
		}
	</style>
</head>
<body>
<div class="row heads">
	<div class="container">
		<div class="col-md-6"><p>云知梦，只为有梦想的人</p></div>
		<div class="col-md-6">
			<ul class="head-right">
				<li class="weixintitle"><span class="glyphicon glyphicon-qrcode" id="qrcode"></span></li>
				<li><span class="glyphicon glyphicon-phone-alt"></span><span class="phone">400-105-8680</span></li>
				<li style="clear:both;"></li>
			</ul>
		</div>
	</div>
</div>

<!-- countDown -->
<div id="hero_outer">
  <div class="hero">
    <div id="flip-counter" class="flip-counter" data-date="2016-09-19"></div>
  </div>
</div>
</body>
<script>
	// 让足球转
	$('div').click(function(){
		s = 0;
		v = 10;
		obj = $(this);
		setInterval(function(){
			s += v;
			obj.stop().css('transform', 'rotate(' + s + 'deg)');
		}, 20);
	});

	// countDown
	$(function() {
		var endTime = new Date($('#flip-counter').data('date'));
		var finished = false;
		var countdown = $.Countdown({
			endTime:endTime,
			afterFinish: function() {
				finished = true;
			}
		});
		var myCounter = new flipCounter('flip-counter', {
			dateFormat:true,
			value:countdown.toString(),
			auto:false,
			tFH:20,
			bFH:20,
			bOffset:200,
			fW:30,
			speed:40
			});
		var intervalId = setInterval(function() {
			if (finished) {
				clearInterval(intervalId);
				return;
			}
			countdown.update();
			myCounter.setValue(countdown.toString())
		}, 1000);
	});
</script>
</html>