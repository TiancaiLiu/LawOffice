<?php
Class Category {
	Static Public function unlimitedForLevel($cate, $html='--', $pid = 0, $level = 0){
		$arr = array();
		foreach($cate as $v){
			if($v['pid'] == $pid){
				$v['level'] = $level + 1;
				$v['html'] = str_repeat($html, $level);
				$arr[] = $v;
				$arr = array_merge($arr,self::unlimitedForLevel($cate, $html, $v['id'], $level+1));
			}
		}
		return $arr;
	}
	
	Static Public function unlimitedForLayer($cate, $name='child', $pid = 0){
		$arr = array();
		foreach($cate as $v){
			if($v['pid'] == $pid){
				$v[$name] = self::unlimitedForLayer($cate, $name, $v['id']);
				$arr[] = $v;
			}
		}
		return $arr;
	}
	
	Static Public function getParents($cate,$id){
		$arr = array();
		foreach($cate as $v){
			if($v['id'] == $id){
				$arr[] = $v;
				$arr = array_merge($arr,self::getParents($cate, $v['pid']));
			}
		}
		return $arr;
	}
	
	Static Public function getChildsId($cate,$pid){
		 $arr = array();
		 foreach($cate as $v){
		 	if($v['pid'] == $pid){
				$arr[] = $v['id'];
				$arr = array_merge($arr,self::getChildsId($cate, $v['id']));
		 	}
		}
		return $arr;
	}
	
	Static Public function getChild($cate,$pid){
		 $arr = array();
		 foreach($cate as $v){
		 	if($v['pid'] == $pid){
				$arr[] = $v;
				$arr = array_merge($arr,self::getChild($cate, $v['id']));
		 	}
		}
		return $arr;  
	}
}
?>