<?php
//数据库设置
$db_config = array();
$db_config["hostname"] = "localhost"; //服务器地址
$db_config["username"] = "root"; //数据库用户名
$db_config["password"] = "123456"; //数据库密码
$db_config["database"] = "xueshi"; //数据库名称
$db_config["charset"] = "utf8";//数据库编码
$db_config["pconnect"] = 1;//开启持久连接
$db_config["log"] = 1;//开启日志
$db_config["logfilepath"] =ROOT. '/dasai/log/';//开启日志
$admin_config['account'] = 'admin';//管理员账号
$admin_config['password'] = 'admin778899';//管理员密码
$email_config['smtpserver'] = "smtp.126.com";//使用126邮箱服务器
$email_config['smtpserverport'] = 25;//126邮箱服务器端口
$email_config['smtpusermail'] = "testlbs@126.com";
$email_config['smtpuser'] = "testlbs";//你的126服务器邮箱账号(去掉@126.com)//SMTP服务器的用户帐号
$email_config['smtppass'] = "lbstest";//你的邮箱密码//SMTP服务器的用户密码
