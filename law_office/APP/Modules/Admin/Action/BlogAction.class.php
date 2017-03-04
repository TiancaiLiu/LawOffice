<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
//500字以内博文(可改) 
	Class BlogAction extends Action{

		// public $blog;

		// parent::__construct($blog){
		// 	$this->blog = M('blog');
		// }

		Public function index(){
			$blog = M('blog');
			$where = array('del' => 0);
			import('ORG.Util.Page');
			$count = $blog->where($where)->count();
			$page = new Page($count, 4);
			$page2 = new Page($count, 24);
			$limit = $page->firstRow . ',' . $page->listRows;
			$limit2 = $page2->firstRow . ',' . $page2->listRows;

			$this->list = $blog->where($where)->limit($limit2)->order('time DESC')->select();
			$this->page2 = $page2->show();
			$this->page = $page->show();
			$this->show = $blog->where($where)->limit($limit)->order('time DESC')->select();
			$this->display();
		}

		Public function addBlog(){
			$this->display();
		}

		Public function runBlog(){
			$blog = M('blog');
			$data = array(
					'title' => $_POST['title'],
					'content' => strip_tags($_POST['content']),
					'time' => time(),
					'author' => $_SESSION['sid']
				);
			if ($blog->add($data)) {
				$this->success("发布成功!", '__GROUP__/Blog/index');
			}
			
		}

		Public function content(){
			$blog = M('blog');
			$where['id'] = $_GET['id'];
			$this->list = $blog->where($where)->select();
			$this->display();
		}

		public function delete(){
			$blog = M('blog');
			$where['id'] = $_GET['id'];

			$del = $blog->where($where)->select();
			foreach ($del as $v) {}

			$data = array(
					'title' => $v['title'],
					'content' => $v['content'],
					'time' => $v['time'],
					'author' => $v['author'],
					'del' => 1,
				);

			if ($blog->where($where)->save($data)) {
				$this->success("删除成功!", '__GROUP__/Blog/index');
			}
		}

		public function update(){
			$_SESSION['uid'] = $_GET['id'];				//runUpdate用
			$blog = M('blog');
			$where['id'] = $_GET['id'];
			$this->list = $blog->where($where)->select();
			$this->display();
		}

		public function runUpdate(){
			$blog = M('blog');
			$where['id'] = $_GET['id'];
			$list = $blog->where($where)->select();
			foreach ($list as $v) {}
			$data = array(
					'id' => $v['id'],				//id不写是不是就没了?
					'title' => $_POST['title'],
					'content' => $_POST['content'],
					'time' => time(),
					'author' => $_SESSION['sid']
				);

			if ($blog->where($where)->save($data)) {

				$this->success("修改成功!", '__GROUP__/Blog/index');

			}
		}

		Public function trach(){
			$blog = M('blog');
			$this->trach = $blog->where("del=1")->select();
			$this->display();			
		}

		Public function Undo(){
			$blog = M('blog');
			$where['id'] = $_GET['id'];

			$del = $blog->where($where)->select();
			foreach ($del as $v) {}

			$data = array(
					'title' => $v['title'],
					'content' => $v['content'],
					'time' => $v['time'],
					'author' => $v['author'],
					'del' => 0,
				);

			if ($blog->where($where)->save($data)) {
				$this->success("还原成功!", '__GROUP__/Blog/trach');
			}
		}

		public function thorough(){
			$blog = M('blog');
			$where['id'] = $_GET['id'];

			

			if ($blog->where($where)->delete()) {
				$this->success("彻底删除成功!", '__GROUP__/Blog/index');
			}
		}
	}
 ?>

 <!-- create table law_blog(id int unsigned not null primary key auto_increment,title char(100) not null default '',content varchar(500) not null default '',author char(20) not null default '',time int not null); -->