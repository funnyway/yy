<?php
require("hi_init.php");
session('toprx_api_username',null) ;
session('toprx_api_userid',null);
setcookie('toprx_api_autologin', null, $now-3600);
setcookie('toprx_api_username', null, $now-3600);
$url = '/';
header('Location:'.$url);
