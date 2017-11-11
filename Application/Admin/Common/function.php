<?php
	/**
	 * 字符串截断函数+省略号,自定义函数
	 */
	function subtext($text, $length){
		if(mb_strlen($text, 'utf-8') > $length){
			return mb_substr($text, 0, $length, 'utf-8').'...';
			return $text;
		} else{
			return $text;
		}
	}

	/**
	 * 清除缓存函数，自定义函数
	 */
	function del_dir($dir) {
		$dh=opendir($dir);
		while ($file=readdir($dh)) {
			if($file!="." && $file!="..") {
				$fullpath=$dir."/".$file;
				if(!is_dir($fullpath)) {
					@unlink($fullpath);
				} else {
					del_dir($fullpath);
				}
			}
		}
		closedir($dh);
		if(rmdir($dir)) {
			return true;
		} else {
			return false;
		}
	}
