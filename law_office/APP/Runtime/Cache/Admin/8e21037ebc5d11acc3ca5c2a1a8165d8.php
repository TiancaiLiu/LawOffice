<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Free CSS template by ChocoTemplates.com</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/style4.css" type="text/css" media="all" />
</head>
<body>
<!-- Container -->
<div id="container">
	<div class="shell">
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">注册律师一览表</h2>
						<div class="right">
							<label>律师查询</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="查询" />
						</div>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table style="width:100% border:0;cellspacing:0; cellpadding:0;">
							<tr>
								<th style="width:13px"></th>
								<th style="width:110px;">用户名</th>
								<th style="width:110px;">律师姓名</th>
								<th style="width:110px;">证件号</th>
								<th style="width:110px;">身份证号</th>
								<th style="width:110px;">登录密码</th>
								<th style="width:110px;">联系电话</th>
								<th style="width:110px;"class="ac">电子邮箱</th>
							</tr>
							<?php if(is_array($index)): foreach($index as $key=>$v): ?><tr>
									<td><input type="checkbox" class="checkbox" /></td>
									<td><h3><a href="#"><?php echo ($v["username"]); ?></a></h3></td>
									<td style="width:110px;"><?php echo ($v["realname"]); ?></td>
									<td><?php echo ($v["idnum"]); ?></td>
									<td><?php echo ($v["idcard"]); ?></td>
									<td><?php echo ($v["pwd"]); ?></td>
									<td><?php echo ($v["tel"]); ?></td>
									<td><?php echo ($v["email"]); ?></td>
								</tr><?php endforeach; endif; ?>
						</table>
						
						
						<!-- Pagging -->
						<div class="pagging">
							<div class="right">
								<a href="#">上一页</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<span>...</span>
								<a href="#">下一页</a>
								<a href="#">查看所有</a>
							</div>
						</div>
					</div>
				</div>
			
	
</body>
</html>