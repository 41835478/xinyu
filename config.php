<?php
/****
爱网购cms 作者：金柯
网址：cms.alqwang.com
QQ：805694800
 ****/
date_default_timezone_set('Asia/Shanghai');//设置时区，保证不同地区显示相同时间
class db{
	function  __construct(){//数据库链接地址  数据库用户名  密码  数据库名
		$this ->mysqli = new mysqli('127.0.0.1', 'root', 'root' ,'loriby');
		if ($this ->mysqli ->connect_error) {
		    die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
		}
		$this->query("SET NAMES UTF8");
	}
	function query( $sql ){
		return $this ->mysqli ->query( $sql );
	}
}
?>