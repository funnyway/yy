<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-17 10:22 ?D1��������?����?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
favicon.ico" />
<title>Powered by 74CMS</title>
<link href="css/common.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$("li").first().addClass("hover");
$("li>a").click(function(){
	$("li").removeClass("hover");
	$(this).parent().addClass("hover");
	$(this).blur();
	})
})
</script>
</head>
<body>
<div  class="admin_left_box">
<ul>
		
<li ><a href="admin_clearcache.php"  target="mainFrame" >���»���</a></li>
<li ><a href="admin_database.php"  target="mainFrame" >���ݿ�</a></li>
<li ><a href="admin_locoyspider.php"  target="mainFrame"  >��ͷ�ɼ�</a></li>
<li ><a href="admin_pay.php"  target="mainFrame"  >֧����ʽ</a></li>
<li ><a href="admin_crons.php"  target="mainFrame"  >�ƻ�����</a></li>
<li ><a href="admin_mailqueue.php"  target="mainFrame"  >�ʼ�Ӫ��</a></li>
<li ><a href="admin_smsqueue.php"  target="mainFrame" >����Ӫ��</a></li>
<li ><a href="admin_openconnect.php"  target="mainFrame"  >�������ʺŵ�¼ </a></li>
<li ><a href="admin_weixin.php"  target="mainFrame"  >΢�Ź���ƽ̨</a></li>
<li ><a href="admin_pms.php"  target="mainFrame"  >��Ϣ</a></li>
<li ><a href="admin_baiduxml.php"  target="mainFrame" >�ٶȿ���ƽ̨</a></li>
<li ><a href="admin_plug.php"  target="mainFrame" >ģ�����</a></li>
</ul>
</div>
</body>
</html>