<?php
/****
爱网购cms 作者：金柯
网址：cms.alqwang.com
QQ：805694800
 ****/
include('check.php');
$index = isset($index)?$index:$input->get('index');
$index = !file_exists($tps.$index.PHP)?'index':$index;
$enurl = (isset($enurl)&&$enurl)?$enurl:$input->get('enurl');
include($tps.$index.PHP);
define('INCLUDES', 'include/');
if(file_exists($tpl.$index.PHP)){
	include($tpl.INCLUDES.'inc.header'.PHP);
	include($tpl.$index.PHP);
	include($tpl.INCLUDES.'inc.footer'.PHP);
}else{
	die('没有找到模板文件');
}
?>