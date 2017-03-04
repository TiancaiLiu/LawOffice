<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>博文列表</title>
		<link rel="stylesheet" href="__PUBLIC__/Css/law.css" type="text/css"/>
		<link rel="stylesheet" href="__PUBLIC__/Css/public2.css" type="text/css"/>
	</head>
	<body>
			<table class="table">
			<tr>
				<th>ID</th>
				<th>所属分类</th>
				<th>标题</th>
				<th>时间</th>
				<th>操作</th>
			</tr>
			<?php if(is_array($case)): foreach($case as $key=>$v): ?><tr style="text-align:center">
					<td width='8%'><?php echo ($v["id"]); ?></td>
					<td width='12%'><?php echo ($v["cate"]); ?></td>
					<td width='12%'><strong><?php echo ($v["title"]); ?></strong></td>
					<td width='12%'><?php echo (date('Y-m-d',$v["addT"])); ?></td>
					<td width='12%'>
						<?php if(ACTION_NAME == "index"): ?>[<a href="#">修改</a>]
							[<a href="<?php echo U(GROUP_NAME . '/Case/toTrach', array('id' => $v['id'],'type' => 1));?>">删除</a>]
						<?php else: ?>
							[<a href="<?php echo U(GROUP_NAME . '/Case/toTrach', array('id' => $v['id'],'type' => 0));?>">还原</a>]
							[<a href="<?php echo U(GROUP_NAME . '/Case/delete',array('id' => $v['id'] ));?>">彻底删除</a>]<?php endif; ?>
					</td>
				</tr><?php endforeach; endif; ?>
			

		</table>
	</body>
</html>