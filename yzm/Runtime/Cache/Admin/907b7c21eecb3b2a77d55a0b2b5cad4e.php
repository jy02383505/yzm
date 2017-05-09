<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>新增规则</title>
	<link rel="stylesheet" href="/yzm/Public/bs/css/bootstrap.min.css">
	<link rel="stylesheet" href="/yzm/Public/jquery-ui/jquery-ui.min.css">
	<link rel="stylesheet" href="/yzm/Public/jquery-ui/jquery-ui.structure.min.css">
	<link rel="stylesheet" href="/yzm/Public/jquery-ui/jquery-ui.theme.min.css">
	<script src="/yzm/Public/bs/js/jquery.min.js"></script>
	<script src="/yzm/Public/jquery-ui/jquery-ui.min.js"></script>
	<script src="/yzm/Public/bs/js/bootstrap.min.js"></script>
	<script src="/yzm/Public/bs/js/holder.min.js"></script>
	
	<style>
		*{
			font-family: 黑体;
		}
		body{
			padding-top: 70px;
		}
		/*bs与j-ui冲突,以下仿造bs的input样式*/
		.datepicker_input{
			border-radius: 4px;
			border-style: solid;
			background-color: #fff;
			border-color: rgb(204, 204, 204);	
			border-width: 1px;
			box-shadow: rgba(0, 0, 0, .075);
			box-shadow: border-box;
			color:rgb(85, 85, 85);
			padding: 6px 12px;
			width: 100%;
			height: 34px;
		}

	</style>
</title>
</head>
<body>
<div class="container">
<!-- head -->
	<!-- 导航条 -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
		    <div class="navbar-header">
			    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
			    </button>
			    <a class="navbar-brand" href="<?php echo U('Index/index');?>"><nobr><img src="/yzm/Public/images/logo.png" alt="云知梦" height="100%">网站后台</nobr></a>
		    </div>

		    <div class="collapse navbar-collapse" id="navbar-collapse">
		    	<ul class="nav navbar-nav navbar-right">
		    		<li><a href="<?php echo U('Index/index');?>">Welcome <code><?php echo ($_SESSION['username']); ?></code></a></li>
		            <li><a href="<?php echo U('Login/logout');?>"><code>退出系统</code></a></li>
		    	</ul>
		    </div>
		</div>
	</nav>

	<div class="row">
		<!-- left -->
		<div class="col-md-2">
			<div class="panel-group" id="accordion">
				<?php if(is_array($module_rules)): $k = 0; $__LIST__ = $module_rules;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$module_rule): $mod = ($k % 2 );++$k;?><div class="panel panel-primary">
					    <div class="panel-heading">
				  	    	<h4 class="panel-title">
				        	<a data-toggle="collapse" id="<?php echo ($module_rule[mname]); ?>" data-parent="#accordion" href="#collapse<?php echo ($module_rule[id]); ?>"> <?php echo ($module_rule[name]); ?> </a>
				    		</h4>
				    	</div>
				    	<div id="collapse<?php echo ($module_rule[id]); ?>" class="panel-collapse collapse " >
				    		<div class="list-group">
				    			<?php if(is_array($module_rule[rules])): $i = 0; $__LIST__ = $module_rule[rules];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rule): $mod = ($i % 2 );++$i;?><a href='<?php echo U("$rule[name]");?>' class='list-group-item'><?php echo ($rule[title]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
				      		</div>
				    	</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>

			</div>
			

		</div>
		
		<!-- right -->
		<div class="col-md-10">
		
<div class="panel panel-info">
	<div class="panel-heading"><h4>新增规则</h4></div>
	<div class="panel panel-body">
		<form action="<?php echo U('add');?>" method="post">
			<div class="form-group">
				<label>规则</label>
				<input type="text" name="name" class="form-control" tabindex="1">
			</div>

			<div class="form-group">
				<label>规则名称</label>
				<input type="text" name="title" class="form-control" tabindex="2">
			</div>

			<div class="form-group">
				<label>所属模块</label>
				<select name="module_id" tabindex="3" class="form-control">
					<?php if(is_array($modules)): $i = 0; $__LIST__ = $modules;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$module): $mod = ($i % 2 );++$i;?><option value="<?php echo ($module[id]); ?>"><?php echo ($module[name]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>

			<div class="form-group">
				<input type="submit" class="btn btn-primary">
				<input type="reset" value="重置" class="btn btn-danger">
			</div>
		</form>	
	</div>
</div>

		</div>
	</div>

</div>
</body>
</html>
<script>
$("#<?php echo (CONTROLLER_NAME); ?>").click();
// datepicker汉化
$(function() {
    $.datepicker.regional["zh-CN"] = { closeText: "关闭", prevText: "&#x3c;上月", nextText: "下月&#x3e;", currentText: "今天", monthNames: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"], monthNamesShort: ["一", "二", "三", "四", "五", "六", "七", "八", "九", "十", "十一", "十二"], dayNames: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"], dayNamesShort: ["周日", "周一", "周二", "周三", "周四", "周五", "周六"], dayNamesMin: ["日", "一", "二", "三", "四", "五", "六"], weekHeader: "周", dateFormat: "yy-mm-dd", firstDay: 1, isRTL: !1, showMonthAfterYear: !0, yearSuffix: "年" }

    $.datepicker.setDefaults($.datepicker.regional["zh-CN"]);

    var datePicker = $("#ctl00_BodyMain_txtDate").datepicker({
        showOtherMonths: true,
        selectOtherMonths: true            
    });
});




</script>