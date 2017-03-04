<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>注册律师一览表</title>
		<link rel="stylesheet" href="__PUBLIC__/Css/law.css" type="text/css"/>
		<link rel="stylesheet" href="__PUBLIC__/Css/public2.css" type="text/css"/>
		<style type="text/css">
			.table tr td{text-align: center;}
		</style>
	</head>
	<body>
		<div><a style="text-decoration:none;">律师管理>></a><a href="<?php echo U(GROUP_NAME . '/Manage/index');?>" style="text-decoration:none;">注册律师一览表</a></div>
		<table class="table">
			<tr>
				<th>序号</th>
				<th>用户名</th>
				<th>律师姓名</th>
				<th>证件号</th>
				<th>身份证号</th>
				<th>登录密码</th>
				<th>联系电话</th>
				<th>电子邮箱</th>
			</tr>
			<?php if(is_array($index)): foreach($index as $key=>$v): ?><tr>
					<td><?php echo ($v["id"]); ?></td>
					<td><?php echo ($v["username"]); ?></td>
					<td><?php echo ($v["realname"]); ?></td>
					<td><?php echo ($v["idnum"]); ?></td>
					<td><?php echo ($v["idcard"]); ?></td>
					<td><?php echo ($v["pwd"]); ?></td>
					<td><?php echo ($v["tel"]); ?></td>
					<td><?php echo ($v["email"]); ?></td>
				</tr><?php endforeach; endif; ?>
			<p><?php echo ($page); ?></p>
		</table>
	</body>
</html>