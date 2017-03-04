<?php
return array(
	'DB_HOST' => 'localhost',
	'DB_USER' => 'root',
	'DB_PWD' => '',
	'DB_NAME' => 'law',
	'DB_PREFIX' => 'law_',
	
	
	 'APP_GROUP_LIST' => 'Admin,Admin',           //独立分组，一个入口对应多个项目
	 'DEFAULT_GROUP' => 'Admin',                 //前台是一个默认项目
	'APP_GROUP_MODE' => 1,
	'APP_GROUP_PATH' => 'Modules',
	
	// 'LOAD_EXT_CONFIG' => 'verify,water',
	
	'SHOW_PAGE_TRACE' => true,
	
	// 'URL_MODEL' => 2,
	// 'URL_ROUTER_ON' => true,
	// 'URL_ROUTE_RULES' => array(
	// 	'/^c_(\d+)$/' => 'Index/List/index?id=:1',
	// 	':id\d' => 'Index/Show/index'	
	// )
	'URL_MODEL' => 2,
	'URL_ROUTER_ON' => true,
	'URL_ROUTE_RULES' => array(
		'/^c_(\d+)$/' => 'Admin/Listcase/index?id=:1',
		':id\d' => 'Admin/Essaycase/index'
		)

);
?>