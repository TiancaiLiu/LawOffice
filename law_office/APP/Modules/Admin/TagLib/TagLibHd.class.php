<?php
	import('TagLib');
	/*自定义标签*/
	Class TagLibHd extends TagLib{

		Protected $tags = array(
			'nav' => array('attr' => 'limit,order', 'close' => 1),
			'new' => array('attr' => 'limit', 'close' => 1)
			);

		Public function _nav($attr, $content){
		$attr = $this->parseXmlAttr($attr);
		$str = <<<str
<?php
	\$_nav_cate = M('cate')->order("{$attr['order']}")->select();
	import('Class.Category', APP_PATH);
	\$_nav_cate = Category::unlimitedForLayer(\$_nav_cate);
	foreach (\$_nav_cate as \$_nav_cate_v) :
		extract(\$_nav_cate_v);
		\$url = U('/c_' . \$id);
?>
str;
		$str .= $content;
		$str .= '<?php endforeach;?>';
		return $str;
		} 

		Public function _new($attr, $content){
			$attr = $this->parseXmlAttr($attr);
			$limit = $attr['limit'];
			$str = '<?php ';
			$str .= '$field = array("id", "title", "addT");';
			$str .= '$_new_case = M("case")->field($field)->limit(' . $limit . ')
					->order("addT DESC")->select();';
			$str .= 'foreach($_new_case as $_new_value):';
			$str .= 'extract($_new_value);';
			$str .= '$url = U("/" . $id);?>';
			$str .= $content;
			$str .= '<?php endforeach;?>';
			return $str; 
		}
	}
?>