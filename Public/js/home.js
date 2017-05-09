	// 头部右边二维码图片
	$(function(){
		$('.weixintitle').hover(function(){
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

	// 让幻灯片转！
	$('.indicator button:first').addClass('active');
	var imageWidth = $(".carouselWindow").width();  
	var imageSum = $(".image_list img").size();  
	var imageReelWidth = imageWidth * imageSum;  
	$('.image_list').css('width', imageReelWidth);

	// 滚动,检测是否到达最后一张幻灯片并给出处理方式
	rotate = function(end){
		if(end){
			var triggerID = imageSum - 1;
			var image_listPosition = triggerID * imageWidth;

			// 设置指示灯样式
			$('.indicator button').removeClass('active');
			$active.addClass('active');

			$('.image_list').animate({
				left: -image_listPosition
			}, 500, function(){
				$(this).css('left', '0px');
			});
		}else{
			var triggerID = $active.attr('rel') - 1;
			var image_listPosition = triggerID * imageWidth;

			$('.indicator button').removeClass('active');
			$active.addClass('active');

			$('.image_list').animate({
				left: -image_listPosition
			}, 500);
		}
	};

	rotateSwitch = function(){
		play = setInterval(function(){
			$active = $('.indicator button.active').next();
			rel = $('.indicator button.active').attr('rel');
			if(rel == $('.image_list img').size() - 1){
				$active = $('.indicator button:first');
				end = true;
			}else{
				end = false;
			}
			rotate(end);
		}, 4000);
	};


	// 鼠标停留事件
	$('.image_list a').hover(function(){
		clearInterval(play);
	}, function(){
		rotateSwitch();
	});

	// 指示灯的点击事件
	$('.indicator button').click(function(){
		$active = $(this);
		clearInterval(play);
		rotate();
		rotateSwitch();
		return false;
	});
	rotateSwitch();

	// 我们的课程
	$(window).scroll(function(){
		scrollTops=$(window).scrollTop();
		
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

	// 倒计时
	function myCountDown(elementId){
		var endTime = new Date($('#' + elementId).data('date'));
		var finished = false;
		var countdown = $.Countdown({
			endTime:endTime,
			afterFinish: function() {
				finished = true;
			}
		});
		var myCounter = new flipCounter(elementId, {
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
			}
			countdown.update();
			myCounter.setValue(countdown.toString())
		}, 1000);
	}
