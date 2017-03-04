<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>律师个人</title>
		<link rel="stylesheet" href="__PUBLIC__/Css/law.css" type="text/css"/>
	</head>
	<body>
			<div class="content-right">
				<a>律师介绍>></a><a href="<?php echo U(GROUP_NAME . '/Law/lawyerIndex');?>">律师列表>></a> 
				<?php if(is_array($lawyer)): foreach($lawyer as $key=>$v): ?><div class="item">
					<img src="__ROOT__/Uploads/<?php echo ($v["photo"]); ?>" alt="" />
					<div class="item-p">
						<p class="name">姓名：<b><?php echo ($v["name"]); ?></b></p>
						<p class="name">特点：<?php echo ($v["summary"]); ?></p>
						<p class="name">律师简介:<?php echo ($v["content"]); ?></p>
						
						<?php if(ACTION_NAME == "lawyerIndex"): ?>[<a href="<?php echo U(GROUP_NAME . '/Law/toTrach',array('id' => $v['id'],'type' => 1));?>">删除</a>]
						<?php else: ?>
						   [<a href="<?php echo U(GROUP_NAME . '/Law/toTrach',array('id' => $v['id'],'type' => 0));?>">还原</a>]
						   [<a href="<?php echo U(GROUP_NAME . '/Car/delete', array('id' => $v['id']));?>">彻底删除</a>]<?php endif; ?>
						
					</div>
				</div>
				<hr /><?php endforeach; endif; ?>
			<p><?php echo ($page); ?></p>
			</div>
	</body>
</html>