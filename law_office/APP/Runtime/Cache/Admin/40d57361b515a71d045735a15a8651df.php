<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="utf8"/>
	<title><?php echo ($title); ?></title>
</head>
<body>
	
	<?php echo ($A); ?><br/>
	<?php echo ($B); ?><br/>
	<?php echo ($C); ?><br/>
	<?php echo ($two[0]); ?><br/>
	<?php echo ($two[1]); ?><br/>
	<?php echo ($two[2][0]); ?><br/>
	<?php echo ($two[2][1]); ?><br/>
	{*myfun()*}<br/>
	<?php echo ($smarty["session"]["username"]); ?><br/>
	{*$artic leTitle|upper|spacify*}<br/>



</body>
</html>