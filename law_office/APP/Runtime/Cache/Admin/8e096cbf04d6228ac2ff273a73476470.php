<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<title>document</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
		<script type="text/javascript">
			window.UEDITOR_HOME_URL = '__ROOT__/Data/ueditor/';
			window.onload = function(){
				window.UEDITOR_CONFIG.initialFrameWidth = 1100;
				window.UEDITOR_CONFIG.initialFrameHeight = 300;
				UE.getEditor('summa');
				UE.getEditor('jobLogg');
				UE.getEditor('evalua');
			}
		</script>
		<style type="text/css">
			.submit{color:#000;background-color: aliceblue;border-radius: 5px;}
			.submit:hover{background-color: #C0C0C0;}
		</style>
		<script type="text/javascript" src="__ROOT__/Data/ueditor/ueditor.config.js"></script>
		<script type="text/javascript" src="__ROOT__/Data/ueditor/ueditor.all.min.js"></script>
	</head>
	<body style="font-family: '微软雅黑';">
		<form action="<?php echo U(GROUP_NAME . '/Case/addCase');?>" method="post" enctype="multipart/from-data">
			<table class="table">
				<tr>
					<th colspan='2'>结案报告</th>
				</tr>
				<tr>
					<td align="right" width='10%'>所属分类:</td>
					<td>
						<select name="cid">
							<option value="">===请选择所属分类===:</option>
							<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td align='right'>标题:</td>
					<td>
						<input type="text" name="title" />
					</td>
				</tr>
				<tr>
					<td align='right'>案件性质:</td>
					<td>
						<input type="text" name='charac' /> 
					</td>
				</tr>
				<tr>
					<td align='right'>代理阶段:</td>
					<td>
						<input type="text" name='stage' /> 
					</td>
				</tr>
				<tr>
					<td align='right'>委托人:</td>
					<td>
						<input type="text" name='client' style="width:300px"/>&nbsp;<a style="color:#ff0000">*要求写出姓名、性别、出生年月、家庭住址及身份证号</a>
					</td>
				</tr>
				<tr>
					<td align='right'>委托时间:</td>
					<td>
						<input type="text" name="clientT"/>
					</td>
				</tr>
				<tr>
					<td align='right'>委托内容:</td>
					<td>
						<textarea name="clientC" id="clientContent" style="width:300px; height:75px;"></textarea>
					</td>
				</tr>
				<tr>
					<td align='right'>代理律师:</td>
					<td>
						<input type="text" name="attor"/>&nbsp;<a style="color:#ff0000">*要求写出律师事务所名及律师名</a>
					</td>
				</tr>
				<tr>
					<td align='right'>结案时间:</td>
					<td>
						<input type="text" name="endT"/>
					</td>
				</tr>
				<tr>
					<td align='right'>案情摘要:</td>
					<td>
						<textarea name="summa" id="summa"></textarea>
					</td>
				</tr>
				<tr>
					<td align='right'>工作记录:</td>
					<td>
						<textarea name="jobLogg" id="jobLogg"></textarea>
					</td>
				</tr>
				<tr>
					<td align='right'>律师评价:</td>
					<td>
						<textarea name="evalua" id="evalua"></textarea>
					</td>
				</tr>
				<tr>
					<td align='center' colspan='2'>
						<input type="submit" value="保存上传" class="submit"/>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>