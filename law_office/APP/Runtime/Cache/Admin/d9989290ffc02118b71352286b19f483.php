<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	
	<script type="text/JavaScript" src='__PUBLIC__/Js/jquery-1.7.2.min.js'></script>
	<script type="text/JavaScript" src='__PUBLIC__/Js/common.js'></script>
    <link rel="stylesheet" href="__PUBLIC__/Css/index.css" />
</head>
<body>
<!--头部-->
<!-- <?php $cate = M('cate')->order('sort')->select(); import('Class.Category', APP_PATH); $cate = Category::unlimitedForLayer($cate); ?> -->
	<div class='top-nav-wrap'>
		<ul class='nav-lv1'>

			<?php
 $_nav_cate = M('cate')->order("sort ASC")->select(); import('Class.Category', APP_PATH); $_nav_cate = Category::unlimitedForLayer($_nav_cate); foreach ($_nav_cate as $_nav_cate_v) : extract($_nav_cate_v); $url = U('/c_' . $id); ?><li class='nav-lv1-li'>
					<a href="<?php echo ($url); ?>" class='top-cate'><?php echo ($name); ?></a>
						<ul>
							<?php if(is_array($child)): foreach($child as $key=>$v): ?><li><a href="<?php echo U('/c_' . $v['id']);?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
						</ul>
					</if>
				</li><?php endforeach;?>
		</foreach>
		</ul>
	</div>
	<div class='main'>
		<div class='main-left'>
			<p>案件浏览</p>
			<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><dl>
					<dt><?php echo ($v["name"]); ?><a href="<?php echo U('/c_' . $v['id']);?>">更多>></a></dt>
					<?php if(is_array($v["case"])): foreach($v["case"] as $key=>$value): ?><dd>
							<a href="<?php echo U('/' . $value['id']);?>" target='_blank'><?php echo ($value["title"]); ?></a>
							<span><?php echo (date('m/d', $value["time"])); ?></span>
						</dd><?php endforeach; endif; ?>
				</dl><?php endforeach; endif; ?>
		</div>
			<!--主体右侧-->
		<div class='main-right'>
			<dl>
				<dt>最新发布</dt>
				<?php $field = array("id", "title", "addT");$_new_case = M("case")->field($field)->limit(5) ->order("addT DESC")->select();foreach($_new_case as $_new_value):extract($_new_value);$url = U("/" . $id);?><dd>
						<a href="<?php echo ($url); ?>"><?php echo ($title); ?></a>
						<span><?php echo (date('Y-m-d',$addT)); ?></span>
					</dd><?php endforeach;?>		
			</dl>

			
			<dl>
				<dt>友情连接</dt>
				<dd>
					<a href="">律师网</a>
				</dd>

				<dd>
					<a href="">律师论坛</a>
				</dd>
				<dd>
					<a href="">律师交流社区</a>
				</dd>
			</dl>
		</div>
	</div>
	<!--底部-->
</body>
</html>