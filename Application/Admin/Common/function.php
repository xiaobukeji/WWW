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
