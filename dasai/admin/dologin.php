<?php
require("../hi_init.php");
$account = PAPI_GetSafeParam('us');
$password = PAPI_GetSafeParam('password');
$remember = PAPI_GetSafeParam('remember');
if(!$account||!$password) {
	$rs['status']  = 0;
	$rs['msg'] = '请输入账号和密码';
	echo json_encode($rs);
	die;
}
if($account == $admin_config['account'] && $password == $admin_config['password']) {
	session('admin_login','超级管理员');
	session('toprx_api_userid',1);
}
$rs = array();
$sql = "select id,account,password,name from  user where account='$account'";
if($row = $db->get_one($sql)) {
	if($row['password'] == md5($password)) {
		$rs['status']  = 1;
		$rs['msg'] = '登录成功';
		if($_SESSION['toprx_api_userid'] == 1) {
			$rs['url'] = 'index.html';
		}
		session('toprx_api_username',$account) ;
		session('toprx_api_userid',$row['id']); 
		$now = time();
		if($remember == 'auto_login') {
			$session_id = session_id();
			$data['auto_login_sessionid'] = $session_id;
			if($db->update('publicapi_user', $data, "account='$account'")) {
				setcookie('toprx_api_username', $account, $now+60*60*24*30);
				setcookie('toprx_api_autologin', $session_id, $now+60*60*24*30);
				$rs['msg'] = '登录成功，下次将自动登录';
			}
		}else {
			setcookie('toprx_api_autologin', null, $now-3600);
			setcookie('toprx_api_username', null, $now-3600);
		}
		echo json_encode($rs);
	}else {
		$rs['status']  = 2;
		$rs['msg'] = '密码错误';
		echo json_encode($rs);
	}
}else {
	$rs['status']  = 3;
	$rs['msg'] = '账号不存在';
	echo json_encode($rs);
}