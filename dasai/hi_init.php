<?php
//error_reporting(E_ALL);
define('ROOT',dirname(__DIR__));
require (ROOT.'/dasai/config/config.php');//引入数据库配置
require(ROOT.'/dasai/class/mysql.php'); //引入数据库操作文件
session_start();
$db = new DB($db_config);
function https_request($url,$data = null){
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($curl, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1);
	if (!empty($data)){
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	}
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($curl);
	curl_close($curl);
	return $output;
}
function PAPI_GetSafeParam($pi_strName, $pi_Def = "", $pi_iType=null)
{
	if ( isset($_GET[$pi_strName]) )
		$t_Val = trim($_GET[$pi_strName]);
	else if ( isset($_POST[$pi_strName]))
		$t_Val = trim($_POST[$pi_strName]);
	else
		return $pi_Def;

	// INT
	if ( 'int' == $pi_iType)
	{
		if (is_numeric($t_Val))
			return $t_Val;
		else
			return $pi_Def;
	}

	// String
	$t_Val = str_replace("&", "&amp;",$t_Val);
	$t_Val = str_replace("<", "&lt;",$t_Val);
	$t_Val = str_replace(">", "&gt;",$t_Val);
	if ( get_magic_quotes_gpc() )
	{
		$t_Val = str_replace("\\\"", "&quot;",$t_Val);
		$t_Val = str_replace("\\''", "&#039;",$t_Val);
	}
	else
	{
		$t_Val = str_replace("\"", "&quot;",$t_Val);
		$t_Val = str_replace("'", "&#039;",$t_Val);
	}
	return $t_Val;
}
/*
 * 获得随机数字字母串
 */
function getSecret($length) {
	$str = 'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz1234567890';
	return substr(str_shuffle($str), 0, $length);
}
/*
 * session操作
 */
function session($key=null,$value=null) {
	if(!$key&&!value) {
		session_destroy();
	}
	if(!$value&&$key) {
		unset($_SESSION[$key]); 
	}elseif($key&&$value) {
		$_SESSION[$key] = $value;
	}
}
