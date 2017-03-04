<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>博文列表</title>
		<link rel="stylesheet" href="__PUBLIC__/Css/law.css" type="text/css"/>
		<link rel="stylesheet" href="__PUBLIC__/Css/public2.css" type="text/css"/>
	</head>
	<body>
			<div><a style="text-decoration:none;">博文共享>></a><a href="<?php echo U(GROUP_NAME . '/Blog/trach');?>" style="text-decoration:none;">回收站>></a></div>
			<table class="table">
			<tr>
				<th>ID</th>
				<th>标题</th>
				<th>作者</th>
				<th>时间</th>
				<th>操作</th>
			</tr>

			<?php if(is_array($trach)): foreach($trach as $key=>$v): ?><tr>
					<td><?php echo ($v["id"]); ?></td>

					<td><a href="<?php echo U(GROUP_NAME . '/Blog/content', array('id' => $v['id']));?>"><?php echo ($v["title"]); ?></a></td>
					<td><?php echo ($v["author"]); ?></td>
					<td><?php echo (date('Y/m/d',$v["time"])); ?></td>					

					<td style="text-align:center;width:30%">
						[<a href="<?php echo U(GROUP_NAME . '/Blog/Undo', array('id' => $v['id']));?>">还原</a>]
						[<a href="<?php echo U(GROUP_NAME . '/Blog/thorough', array('id' => $v['id']));?>">彻底删除</a>]
					</td>
				</tr><?php endforeach; endif; ?>

		</table>
	</body>
</html>