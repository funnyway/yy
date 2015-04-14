<?php 
require 'hi_init.php';
if($_SESSION['toprx_api_userid'] != 1 || $_SESSION['admin_login'] != '超级管理员'){
	die();
}
$page = PAPI_GetSafeParam('page');
$page = $page?$page:1;
$page = (int)$page;
$pageSize = 10;
if($page>$count)
{
	$page = 1;
}

$start = ($page-1)*$pageSize;
$action = PAPI_GetSafeParam('action');
$action = $action?$action:'applist';
if($action == 'applist') {
	$countrs =$db->get_one('SELECT count(*) as total FROM publicapi_app ');
	$count = (int)$countrs['total'];
	$rs = $db->get_all("SELECT a.appid AS appid, a.appname, u.account, a.`status`, a.callCount FROM publicapi_app AS a RIGHT JOIN user_app AS ua ON ua.appid = a.appid LEFT JOIN publicapi_user AS u ON u.cid = ua.cid LIMIT $start,$pageSize");
	require('template/applist.temp.php'); //导入头部
}elseif($action ==apilist) {
	$countrs =$db->get_one('select count(*) as total from(SELECT 1 as sum FROM infcall_his GROUP BY methodName) as aa ');
	$count = (int)$countrs['total'];
	$rs = $db->get_all("SELECT methodName, Count(*) as sum FROM infcall_his GROUP BY methodName LIMIT $start,$pageSize");
	require('template/apilist.temp.php'); //导入头部
}
?>