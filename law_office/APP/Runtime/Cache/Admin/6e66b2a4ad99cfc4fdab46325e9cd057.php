<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<title>document</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
		<script type="text/javascript">
			window.UEDITOR_HOME_URL = '__ROOT__/Data/ueditor/';
			window.onload = function(){
				window.UEDITOR_CONFIG.initialFrameWidth = 1250;
				window.UEDITOR_CONFIG.initialFrameHeight = 600;
				UE.getEditor('content');
			}
		</script>
		<style type="text/css">
			.submit{color:#000;background-color: aliceblue;border-radius: 5px;}
			.submit:hover{background-color: #C0C0C0;}
		</style>
		<script type="text/javascript" src="__ROOT__/Data/ueditor/ueditor.config.js"></script>
		<script type="text/javascript" src="__ROOT__/Data/ueditor/ueditor.all.min.js"></script>

	</head>
	<body>
		<form action="<?php echo U(GROUP_NAME . '/Blog/runBlog');?>" method="post" enctype="multipart/from-data">
			<table class="table">
				<tr>
					<th colspan='2'>发表文章</th>
				</tr>
				<tr>
					<td align='right' width='20%'>文章标题:</td>
					<td>
						<input type="text" name="title" />
					</td>
				</tr>
				
				<tr>
					<td colspan="2">	
						<textarea name="content" id="content"></textarea>
					</td>
				</tr>
				<tr>
					<td align="center" colspan="2">
						<input type="submit" value="发布文章" class="submit"/>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>