<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>123</title>
		<link href="__PUBLIC__/Css/style3.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="main">
			<div><a>博文共享>></a><a href="<?php echo U(GROUP_NAME . '/Blog/index');?>" style="text-decoration:none;">博文列表>></a></div>
			<div class="left">

				<strong>博文列表</strong>
				<ul>
					<?php if(is_array($list)): foreach($list as $key=>$v): ?><li><p><a href="<?php echo U(GROUP_NAME . '/Blog/content', array('id' => $v['id']));?>"><?php echo ($v["title"]); ?></a></p>
							<p style="color:blue;">作者:<?php echo ($v["author"]); ?></p>
							<span style="color:#BB7070"><?php echo (date('Y/m/d',$v["time"])); ?></span>
							<a href="<?php echo U(GROUP_NAME . '/Blog/update', array('id' => $v['id']));?>">【编辑】</a>
							<a href="<?php echo U(GROUP_NAME . '/Blog/delete', array('id' => $v['id']));?>">【删除】</a></li><?php endforeach; endif; ?>
					<p style="float:left;width:800px;background:#fff;text-align:center;"><?php echo ($page2); ?></p>
				</ul>
			</div>
			<div class="right">
				<div class="right_1">
					<strong>最新发布</strong>
						<ul>
							<?php if(is_array($show)): foreach($show as $key=>$v): ?><li><p><a href="<?php echo U(GROUP_NAME . '/Blog/content', array('id' => $v['id']));?>" style="color:red;"><?php echo ($v["title"]); ?></a></p><?php endforeach; endif; ?>
						</ul>
				</div>
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