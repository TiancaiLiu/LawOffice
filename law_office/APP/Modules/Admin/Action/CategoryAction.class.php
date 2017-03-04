<?php

	Class CategoryAction extends CommonAction{
		//分类列表视图
		Public function index(){
			import('Class.Category', APP_PATH);
			$cate = M('cate')->order('sort ASC')->select();
			$this->cate = Category::unlimitedForLevel($cate, '&nbsp;&nbsp;--');
			$this->display();
		}

		//添加分类视图
		Public function addCate(){
			//等价于$pid = isset($_GET['pid']) ? $_GET['pid'] : 0;
			$this->pid = I('pid', 0, 'intval');//转换为整型
			$this->display();	
		}
		//添加分类表单处理
		Public function runAddCate(){
			//p($_POST);
			if(M('cate')->add($_POST)){
				$this->success('添加成功', U(GROUP_NAME . '/Category/index'));
			}else{
				$this->error('添加失败');
			}
		}
		//排序
		Public function sortCate(){
			//p($_POST);
			$db = M('cate');
			foreach ($_POST as $id => $sort) {
				$db->where(array('id'=>$id))->setField('sort', $sort);//遍历更新字段
			}
			$this->redirect(GROUP_NAME . '/Category/index');
		}
	}

?>