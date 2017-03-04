<?php
	
	Class CaseAction extends CommonAction{
		//案件列表视图
		Public function index(){
			// $case = D('CaseRelation')->relation(true)->select();
			// p($case);
			$field = array('del');
			$where = array('del' => 0);
			$this->case = D('CaseRelation')->field($field, true)->where($where)->relation(true)->select(); 
			
			$this->display();
		}
		//添加案件视图
		Public function cases(){
			//读取所属分类
			import('Class.Category', APP_PATH);
			$cate = M('cate')->order('sort')->select();
			$this->cate = Category::unlimitedForLevel($cate);
			$this->display();
		}
		//添加案件表单处理
		Public function addCase(){
			//p($_POST); 
			$case = M('case');
			$data = array(
				'title' => $_POST['title'],
				'charac' => $_POST['charac'],
				'stage' => $_POST['stage'],
				'client' => $_POST['client'],
				'clientT' => $_POST['clientT'],
				'addT' =>time(),
				'endT' => $_POST['endT'],
				'clientC' => $_POST['clientC'],
				'attor' => $_POST['attor'],
				'summa' => $_POST['summa'],
				'jobLogg' => $_POST['jobLogg'],
				'evalua' => $_POST['evalua'],
				'cid' => (int) $_POST['cid']
				);
			if ($case->add($data)) {
				$this->success("添加成功", '__GROUP__/Case/index ');
			}else{
				$this->error("添加失败，请重试", '__GROUP__/Case/cases');
			}
		}

		//回收站视图
		Public function trach(){
			$field = array('del');
			$where = array('del' => 1);
			$this->case = D('CaseRelation')->field($field, true)->where($where)->relation(true)->select(); 
			
			$this->display('index');
		}
		//删除到回收站/还原
		Public function toTrach(){
			$type = (int) $_GET['type'];
			$msg = $type ? '删除' : '还原';
			$upadte = array(
				'id' => (int) $_GET['id'],
				'del' => $type
				);
			if(M('case')->save($upadte)){
				$this->success($msg . '成功',U(GROUP_NAME . '/Case/index'));
			}else{
				$this->error($msg . '失败');
			}
		}

		//彻底删除
		Public function delete(){
			$where['id'] = (int) $_GET['id'];
			$case = M('case');
			if($case->where($where)->delete()){
				$this->success('已从系统移除', U(GROUP_NAME . '/Case/index'));
			}
		}
	}


?>