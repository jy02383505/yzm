<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>新增幻灯片</title>
	<link rel="stylesheet" href="/yzm/Public/bs/css/bootstrap.min.css">
	<link rel="stylesheet" href="/yzm/Public/uploadify/uploadify.css">
	<script src="/yzm/Public/bs/js/jquery.min.js"></script>
	<script src="/yzm/Public/bs/js/bootstrap.min.js"></script>
	<script src="/yzm/Public/bs/js/holder.min.js"></script>
	<script src="/yzm/Public/uploadify/jquery.uploadify.min.js"></script>
	
	<style>
		*{
			font-family: 黑体;
		}
		body{padding-top: 70px;}
		

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
		    		<li><a href="<?php echo U('Index/index');?>">Welcome<code><?php echo ($_SESSION['username']); ?></code></a></li>
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
				        	<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo ($module_rule[id]); ?>"> <?php echo ($module_rule[name]); ?> </a>
				    		</h4>
				    	</div>
				    	<div id="collapse<?php echo ($module_rule[id]); ?>" class="panel-collapse collapse <?php echo ($k==1?in:''); ?>" >
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
	<div class="panel-heading">
		<div class="panel-title"><h4>新增幻灯片</h4></div>
	</div>
	<div class="panel-body">
		<form action="<?php echo U('add');?>" class="form" method="post">
			<div class="form-group">
				<label>图片上传</label>
				<div id="imgs"></div>
				<input type="type" name="file_upload" id="file_upload" class="form-control" multiple="true">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary">
				<input type="reset" value="重置" class="btn btn-danger">
			</div>
		</form>	
	</div>
</div>
<script>
	igm = '';
	$('#file_upload').uploadify({
		'swf': '/yzm/Public/uploadify/uploadify.swf',
		'uploader': '<?php echo U("Carousel/upload");?>',
		'buttonText': '缩略图上传',
		onUploadSuccess: function(file, data, response){
			alert(data);
			img += "<img width='300px' src='/yzm/Uploads/" + data + "'>";
			$('#imgs').html(img);
		}
	});
</script>

		</div>
	</div>

</div>

</body>
</html>