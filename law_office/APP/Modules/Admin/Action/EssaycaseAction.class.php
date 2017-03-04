<?php
	
	Class EssaycaseAction extends CommonAction{

		Public function index(){
			$id = (int) $_GET['id'];
			$field = array('title', 'charac', 'stage', 'client', 
							'clientT', 'addT', 'endT', 'clientC', 
							'attor', 'summa', 'jobLogg', 'evalua');
			$this->case = M('case')->field($field)->find($id);

			$cid = $this->case['cid'];
			import('Class.Category', APP_PATH);
			$cate = M('cate')->order('sort')->select();
			$this->parent = Category::getParents($cate, $cid);
			$this->display();
		}
	}


?>