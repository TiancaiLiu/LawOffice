<?php if (!defined('THINK_PATH')) exit();?><dl>
	<dt>热门博文</dt>
	<?php if(is_array($case)): foreach($case as $key=>$v): ?><dd>
			<a href="<?php echo U('/' . $v['id']);?>" target="_blank"><?php echo ($v["title"]); ?></a>
			<span><?php echo (date('Y/m/d',$v["addT"])); ?></span>
		</dd><?php endforeach; endif; ?>

</dl>