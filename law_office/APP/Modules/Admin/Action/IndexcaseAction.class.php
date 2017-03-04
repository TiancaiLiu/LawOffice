<?php
/**
 * 首页控制器
 */
Class IndexcaseAction extends CommonAction{
	
	 Public function index(){
	 		if(!$list = S('index_list')){
				$list = M('cate')->where(array('pid' => 0))->order('sort')->select();
				import('Class.Category', APP_PATH);
				$cate = M('cate')->order('sort')->select();
				foreach ($list as $k => $v) {
					$cids = Category::getChildsId($cate, $v['id']);
					$cids[] = $v['id'];	
					$where = array('cid' => array('IN', $cids));
					$list[$k]['case'] = M('case')->field(array('id','title','addT'))->where($where)->order('addT DESC')->select();
			
				}
				S('index_list', $list, 3);
			}
			$this->cate = $list;
			$this->display();
	
	
	}
}
?>