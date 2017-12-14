<?php
/****
爱网购cms 作者：金柯
网址：cms.alqwang.com
QQ：805694800
 ****/
//获取当前毫秒时间戳
function times(){
    list($msec, $sec) = explode(' ', microtime());
    return (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
}
$times_s = times();
session_start();//启用session
header("Content-type:text/html;charset=utf-8");//定义网页编码
define('PATH',dirname(__FILE__));
define('PHP','.php');
define('KEY', 'AWGOUS');
include(PATH . '/config.php');//加载数据库类
$db = new db();
include(PATH . '/core/input.class.php');//加载输入类
$input = new input();
include(PATH . '/core/function.php');//加载函数库
$nowtime = time();//获取当前时间戳
//生成伪静态并且处理网页链接
$ifurl = '2';//是否开启伪静态
$urlsymbol='-'; //分隔符
$urlsuffix='/';//后缀
$pagenum = ($input->get('pagenum') AND $input->get('pagenum')<=50)?$input->get('pagenum'):50;//商品每页显示数量
$page = $input->get('page')?$input->get('page'):1;//当前页
$offset = ($page-1)*$pagenum;//偏移量
//设置当前网站模板
$tpl = 'index'; //模板
$name = '爱网购';//网站名
if(is_mobile()){
	$tps = 'php/'.$tpl.'/m/';
	$tpl = 'tpl/'.$tpl.'/m/';
}else{
	$tps = 'php/'.$tpl.'/m/';
	$tpl = 'tpl/'.$tpl.'/m/';
	// $tps = 'php/'.$tpl.'/index/';
	// $tpl = 'tpl/'.$tpl.'/index/';
}
?>