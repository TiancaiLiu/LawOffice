<?php
	
	Class ListcaseAction extends CommonAction{

		Public function index(){
			$id = (int) $_GET['id'];
			$cate = M('cate')->order('sort')->select();
			import('Class.Category', APP_PATH);
			import('ORG.Util.Page');
			$cids = Category::getChildsId($cate, $id);
			$cids[] = $id;
			$where = array('cid' => array('IN', $cids));
			
			// $cate = M('cate')->order('sort')->select();
			// import('Class.Category', APP_PATH);
			// $cids = Category::getChildsId($cate, $id);
			// $cids[] = $id;
			// $case = D('CaseView')->where(array('cid' => array('IN', $cids)))->select();
			// p($case);
			$count = M('case')->where($where)->count();
			$page = new Page($count, 5);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->case = M('case')->where($where)->order('addT DESC')->select();
			$this->page = $page->show();
			$this->display();
		}
	}


?>