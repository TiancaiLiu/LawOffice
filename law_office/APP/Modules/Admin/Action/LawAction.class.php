<?php
	class LawAction extends CommonAction{

		//律师列表
		Public function lawyerIndex(){
			// $field = array('del');
			// $where = array('del' => 0);
			// $this->lawyer=M('lawyer')->field($field,true)->where($where)->select();
			// $this->display();
			$id = (int) $_GET['id'];
			$where = array('del' => 0);

			import('ORG.Util.Page');
			$count = M('lawyer')->where($where)->count();
			$page = new Page($count, 3);
			$limit = $page->firstRow . ',' . $page->listRows;
			$this->lawyer = M('lawyer')->where($where)->limit($limit)->select();
			$this->page = $page->show();

			$this->display();
		}

		//添加律师信息
		Public function lawyer(){
			$this->display();

			// create table law_lawyer(id int unsigned not null primary key auto_increment,
			// 	name varchar(30) not null default '',
			// 	summary text,
			// 	content text,
			// 	time int(10) unsigned not null default 0,
			// 	photo varchar(50) not null default'',
			// 	del tinyint(1) unsigned not null default 0);
		}

		//添加律师信息表单处理
		Public function addLawyer(){
			$data = array(
					'name' => $_POST['lawyername'],
					'summary' => $_POST['summary'],
					'photo' => $_POST['photo'],
					'content' => $_POST['content'],
					'time' => time()
				);
			if($v = M('lawyer')->add($data)){
				$this->success('添加成功' ,U(GROUP_NAME . '/Law/lawyerIndex'));
			}else{
				$this->error('您的操作有误，请重新输入');
			}
		}

		//律师信息表回收/还原（回收站）
		Public function trach(){
			$field = array('del');
			$where = array('del' => 1);

			import('ORG.Util.Page');
			$count = M('lawyer')->where($where)->count();
			$page = new Page($count, 3);
			$limit = $page->firstRow . ',' . $page->listRows;

			$this->lawyer = M('lawyer')->field($field,true)->where($where)->limit($limit)->select();
			$this->page = $page->show();
			$this->display('lawyerIndex'); 
		}

		//删除律师信息到回收站/还原
		Public function toTrach(){
			$type = (int) $_GET['type'];
			$msg = $type ? '删除' : '还原';
			$update = array(
				'id' => (int) $_GET['id'],
				'del' => $type
				);
			if(M('lawyer')->save($update)){
				$this->success($msg . '成功' ,U(GROUP_NAME . '/Law/lawyerIndex'));
			}else{
				$this->error($msg . '失败');
			}
		}
	}

?>