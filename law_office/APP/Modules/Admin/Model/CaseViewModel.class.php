<?php
	Class CaseViewModel extends ViewModel {

		Protected $viewFields = array(
			'case' => array(
				'id', 'title', 'addT', 'charac',
				'_type' => 'LEFT',
				),
			'cate' => array(
				'name', '_on' => 'case.cid = cate.id',
				),
			);
	}

?>