<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>开发者中心</title>
<link href="../css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="box">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td rowspan="2"><img src="../images/TopRx_r2_c3.jpg" width="282" height="72" /></td>
    <td width="60" id="login-name">
    <?php 
    	if (isset($_SESSION['toprx_api_userid'])) {
    		echo '<a href="/hi" id="btn1">'.$_SESSION['toprx_api_username'].'</a><input id="haslogin" type="hidden" value="yes" />';
    		
    	}else {
    		echo '<a href="login.php" id="btn1"><img src="../images/TopRx_r1_c19.jpg" width="54" height="28" border="0" /></a><input id="haslogin" type="hidden" value="no" />';
    	}
    ?>
    </td>
    <td width="120" id="logout-btn">
        <?php 
    	if (isset($_SESSION['toprx_api_userid'])) {
    		echo '<a href="logout.php"><button type="button" class="btns3" style="line-height:24px;width:48px;height:24px;font-size:12px;">退出</button></a>';
    	}else {
    		echo ' <a href="zc.php" id="btn2"><img src="../images/TopRx_r1_c21.jpg" width="54" height="28" border="0" /></a>';
    	}
    ?>
    
   </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
<table width="1180" border="0" cellspacing="0" cellpadding="0" style="overflow: hidden;">
  <tr>
    <td align="right"><table width="500" border="0" align="right" cellpadding="0" cellspacing="0" class="dh1">
  <tr>
    <td align="left" valign="middle">　 <a href="/" class="dh1">首页</a>　　<a href="index.php" class="dh1">开发者中心</a>　　<a href="myapp.php" class="dh1">我的应用</a>　　<a href="/wd/6.html" class="dh1">API文档</a></td>
  </tr>
</table></td>
  </tr>
</table>
