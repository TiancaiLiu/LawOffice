<?php

	Class CaseRelationModel extends RelationModel{
		Protected $tableName = 'case';

		Protected $_link = array(
			'cate' => array(
				'mapping_type' => BELONGS_TO,
				'foreign_key' => 'cid',
				'mapping_fields' => 'name',
				'as_fields' => 'name:cate'
				)
			);
	}
?>