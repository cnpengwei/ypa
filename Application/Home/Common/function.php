<?php

function p($array)
{
    dump($array, 1, '<pre>', 0);
}


function getCatName($id){
	$cat = M('Category');
	$where['cat_pid'] = $id;
	$catname = $cat->where($where)->order('cat_sort')->select();
	// p($catname);
	foreach ($catname as $value) {
		$retcatname = $retcatname.'<em><a href="list/'.$value['id'].'">'.$value['cat_name'].'</a></em>';
	}
	return $retcatname;
}