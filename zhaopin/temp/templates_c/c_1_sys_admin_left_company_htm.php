<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-17 10:22 ?D1ú±ê×?ê±?? */ ?>
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
<li><a href="admin_company.php"  target="mainFrame" >职位列表</a></li>
<li><a href="admin_company.php?jobtype=2&audit=2"  target="mainFrame" >待审核职位</a></li>
 <li><a href="admin_company.php?act=company_list"  target="mainFrame" >企业管理</a></li>
<li><a href="admin_company.php?act=company_list&amp;audit=2"  target="mainFrame" > 待认证企业</a></li>
<li><a href="admin_company.php?act=members_list" target="mainFrame"  >企业会员</a></li>
<li><a href="admin_company.php?act=order_list" target="mainFrame" >订单管理</a></li>
<li><a href="admin_promotion.php" target="mainFrame"  >企业推广</a></li>
<li><a href="admin_company.php?act=consultant" target="mainFrame"  >顾问管理</a></li>
 </ul>
</div>
</body>
</html>