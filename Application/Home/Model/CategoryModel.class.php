<?php

namespace Home\Model;
use Think\Model\RelationModel;

class CategoryModel extends RelationModel{

		// 自关联用parent_key,关联其他表用foreign key
		// link是关联关系的意思
		protected  $_link = array(
			'Category' => array(
				'mapping_type'=>self::HAS_MANY,
				'mapping_name'=>'subitem',
				'mapping_order'=>'cat_sort',
				'parent_key'=>'cat_pid',
			), 

			'Ad' =>array(
				'mapping_type'=>self::HAS_MANY,
				'mapping_name'=>'ad',
				'mapping_order'=>'ad_sort',
				'foreign_key'=>'cat_id', //关联的另一张表的主键
			),

			'Brand' =>array(
				'mapping_type'=>self::HAS_MANY,
				'mapping_name'=>'brand',
				'mapping_order'=>'brand_sort',
				'foreign_key'=>'cat_id', //关联的另一张表的主键
				'mapping_limit'=>12,
			),
		);

	}
?>