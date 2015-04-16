<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-15 11:18 ?D1ú±ê×?ê±?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=gb2312">
<title><?php echo $this->_vars['title']; ?>
</title>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
favicon.ico" />
<meta name="author" content="骑士CMS" />
<meta name="copyright" content="74cms.com" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user_personal.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user_common.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type='text/javascript' language="javascript"></script>

</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("user/header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>

<div class="page_location link_bk">当前位置：<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
">首页</a> > <a href="<?php echo $this->_vars['userindexurl']; ?>
">会员中心</a> > 登录日志</div>

<div class="usermain">
  <div class="leftmenu link_bk">
   <?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("member_personal/left.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  </div>
<div class="rightmain">
  
	<div class="bbox1">
	
	<div class="log">
			
 	    	<div class="topnav">
			  
			<div class="titleH1">
				<div class="h1-title">账户管理</div>
			</div>
					
			<div class="navs link_bk">
				<a href="?act=userprofile">基本资料</a>
				  <a href="?act=password_edit">密码修改</a>
				  <a href="?act=authenticate">安全认证</a>
				  <a href="?act=avatars">头像</a>
				  <a href="?act=pm">消息<?php if ($this->_vars['total']): ?><span class="h">(<?php echo $this->_vars['total']; ?>
)</span><?php endif; ?></a>
				   <a href="?act=login_log" class="se">登陆日志</a>
				   <a href="?act=binding">账号绑定</a>
				  <div class="clear"></div>
			</div>
	  	</div>
	  		<div class="toptitle"  >
			    <div class="t1">登陆时间 </div>
				<div class="t2">登陆地点</div>
				<div class="t3">登陆IP</div>
				<div class="clear"></div>
			  </div>
	  		<?php if ($this->_vars['loginlog']): ?>
			  <?php if (count((array)$this->_vars['loginlog'])): foreach ((array)$this->_vars['loginlog'] as $this->_vars['list']): ?>
			   <div class="ilist userliststyle">
			    <div class="t1"><?php echo $this->_run_modifier($this->_vars['list']['log_addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M:%S"); ?>
</div>
				<div class="t2"><?php if ($this->_vars['list']['log_address']):  echo $this->_vars['list']['log_address'];  else: ?>未知<?php endif; ?></div>
				<div class="t3"><?php echo $this->_vars['list']['log_ip']; ?>
</div>
				<div class="clear"></div>
			  </div>
			  <?php endforeach; endif; ?>
			   <?php if ($this->_vars['page']): ?>
		<table border="0" align="center" cellpadding="0" cellspacing="0" class="link_bk">
          <tr>
            <td height="50" align="center"> <div class="page link_bk"><?php echo $this->_vars['page']; ?>
</div></td>
          </tr>
      </table>
      <?php endif; ?>
			  <?php else: ?>
			   <div class="emptytip">对不起！没有找到您要的信息！</div>
			   <?php endif; ?>
			  
	  	</div>
	</div>
	</div>
  </div>
	</div>
</div>

<div class="clear"></div>
</div>

<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("user/footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>