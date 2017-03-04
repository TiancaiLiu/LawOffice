<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>123</title>
		<link href="__PUBLIC__/Css/style2.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="main">
			<div><a>博文共享>></a><a href="<?php echo U(GROUP_NAME . '/Blog/index');?>" style="text-decoration:none;">返回>></a></div>
			<div class="left">
				<?php if(is_array($list)): foreach($list as $key=>$v): ?><strong><?php echo ($v["title"]); ?></strong>
					<span style="margin-right: 200px;color:blue"><?php echo ($v["author"]); ?></span><span style="color:#BB7070"><?php echo (date('Y/m/d',$v["time"])); ?></span>
					<div class="con">
						<?php echo ($v["content"]); ?>
					</div><?php endforeach; endif; ?>
			</div>
			<div class="right">
				<div class="right_1">
					<strong>友情链接</strong>
					<ul>
						<li><a href="#">吉林律师网</li>
						<li><a href="#">中国律师网</li>
						<li><a href="#">律师博文网</li>
						<li><a href="#">博客之家</li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>