<?php
	Class HotWidget extends Widget{

		Public function render($data){
			$field = array('id', 'title', 'addT');
			 
			$data['case'] = M('case')->field($field)->order('addT DESC')->limit(5)->select();
			return $this->renderFile('', $data);
		}
	}
?>