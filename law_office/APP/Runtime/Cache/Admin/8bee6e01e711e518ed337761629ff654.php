<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />	
	<script type="text/JavaScript" src='__PUBLIC__/Js/jquery-1.7.2.min.js'></script>
	<script type="text/JavaScript" src='__PUBLIC__/Js/common.js'></script>
	<link rel="stylesheet" href="__PUBLIC__/Css/show.css" />
</head>
<body>
	<div class='top-nav-wrap'>
		<ul class='nav-lv1'>
			<?php
 $_nav_cate = M('cate')->order("sort ASC")->select(); import('Class.Category', APP_PATH); $_nav_cate = Category::unlimitedForLayer($_nav_cate); foreach ($_nav_cate as $_nav_cate_v) : extract($_nav_cate_v); $url = U('/c_' . $id); ?><li class='nav-lv1-li'>
					<a href="<?php echo ($url); ?>" class='top-cate'><?php echo ($name); ?></a>
						<ul>
							<?php if(is_array($child)): foreach($child as $key=>$v): ?><li><a href="<?php echo U('/c_' . $v['id']);?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
						</ul>
				</li><?php endforeach;?>
		</ul>
	</div>
<!--主体-->
	<div class='main'>
		<div class='main-left'>
			<div class='location'>
				<a href="<?php echo U(GROUP_NAME . '/Indexcase/index');?>">返回首页</a>
			</div>
			<div class="title">
				<p><?php echo ($case["title"]); ?></p>
				<div>
					<span class='fl'>发布于：<?php echo (date('Y年m月d日',$case["addT"])); ?></span>
					<span class='fr'>结案时间：<?php echo (date('Y年m月d日',$case["endT"])); ?></span>
				</div>
			</div>
			<div class='content'>
				<p style="color:red;">案件性质:</p><?php echo ($case["charac"]); ?>
				<p style="color:red;">代理阶段:</p> <?php echo ($case["stage"]); ?>
				<p style="color:red;">委托人:</p><?php echo ($case["client"]); ?>
				<p style="color:red;">委托时间:</p><?php echo ($case["clientT"]); ?>
				<p style="color:red;">委托内容:</p><?php echo ($case["clientC"]); ?>	
				<p style="color:red;">结案时间:</p><?php echo ($case["endT"]); ?>
				<p style="color:red;">代理律师:</p><?php echo ($case["attor"]); ?>
				<p style="color:red;">案情摘要:</p><?php echo ($case["summa"]); ?>
				<p style="color:red;">工作记录:</p><?php echo ($case["jobLogg"]); ?>
				<p style="color:red;">律师评价:</p><?php echo ($case["evalua"]); ?>
			</div>
		</div>
	<!--主体右侧-->
		<div class='main-right'>
			<?php echo W('Hot');?>
					
			<dl>
				<dt>友情连接</dt>
				<dd>
					<a href="">中国律师网</a>
				</dd>

				<dd>
					<a href="">吉林律师</a>
				</dd>
				<dd>
					<a href="">律师论坛</a>
				</dd>
			</dl>
		</div>
	</div>

</body>
</html>