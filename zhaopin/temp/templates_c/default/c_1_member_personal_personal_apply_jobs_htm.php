<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-15 11:01 ?D1ú±ê×?ê±?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_vars['title']; ?>
</title>
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
favicon.ico" />
<meta name="author" content="骑士CMS" />
<meta name="copyright" content="74cms.com" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user_personal.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user_common.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.vtip-min.js" type="text/javascript" language="javascript"></script>
</head>

<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("user/header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="page_location link_bk">当前位置：<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
">首页</a> > <a href="<?php echo $this->_vars['userindexurl']; ?>
">会员中心</a> > 已申请的职位</div>

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
	  <div class="apply link_bk">
 	    <div class="topnav">
		 	<div class="titleH1">
			  <div class="h1-title">已申请的职位</div>
			</div>
			<div class="navs">
				<a href="?act=<?php echo $this->_vars['act']; ?>
&aetlook="<?php if ($_GET['aetlook'] == ""): ?> class="se"<?php endif; ?>>所有<span<?php if ($_GET['aetlook'] == ""): ?> class="h"<?php endif; ?>>(<?php echo $this->_vars['count']['2']; ?>
)</span></a>
				<a href="?act=<?php echo $this->_vars['act']; ?>
&aetlook=1"<?php if ($_GET['aetlook'] == "1"): ?> class="se"<?php endif; ?>>未查看<span<?php if ($_GET['aetlook'] == "1"): ?> class="h"<?php endif; ?>>(<?php echo $this->_vars['count']['0']; ?>
)</span></a>
				<a href="?act=<?php echo $this->_vars['act']; ?>
&aetlook=2"<?php if ($_GET['aetlook'] == "2"): ?> class="se"<?php endif; ?>>已查看<span<?php if ($_GET['aetlook'] == "2"): ?> class="h"<?php endif; ?>>(<?php echo $this->_vars['count']['1']; ?>
)</span></a>
				<div class="clear"></div>
			</div>
	  	</div> 
	  	<form action="?act=del_jobs_apply" id="form1" name="form1" method="post">
	  		<div class="toptitle">
			    <div class="t1"><label><input name="chkAll" type="checkbox" value="" id="chk" />&nbsp;&nbsp;职位名称</label> </div>
				<div class="t2">公司名称</div>
				<div class="t3">投递的简历</div>
				<div class="t4">对方查看</div>
				<div class="t5">投递时间</div>
				<div class="t6">备注</div>
				<div class="clear"></div>
			</div>
			<?php if ($this->_vars['jobs_apply']): ?>
			<?php if (count((array)$this->_vars['jobs_apply'])): foreach ((array)$this->_vars['jobs_apply'] as $this->_vars['list']): ?>
			<?php if ($this->_vars['list']['district_cn']): ?>
			<div class="ilist userliststyle">
			    <div class="t1"><input name="y_id[]" type="checkbox" id="y_id" value="<?php echo $this->_vars['list']['did']; ?>
" />&nbsp;&nbsp;<a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" target="_blank" title="<?php echo $this->_vars['list']['jobs_name']; ?>
"><?php echo $this->_vars['list']['jobs_name']; ?>
</a></div>
				<div class="t2"><a href="<?php echo $this->_vars['list']['company_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['company_name']; ?>
</a></div>
				<div class="t3"><?php if ($this->_vars['list']['resume_name']): ?><a href="personal_resume.php?act=edit_resume&pid=<?php echo $this->_vars['list']['resume_id']; ?>
"><?php echo $this->_vars['list']['resume_name']; ?>
</a><?php else: ?><font color="red">该简历已删除！</font><?php endif; ?></div>
				<div class="t4"><?php if ($this->_vars['list']['personal_look'] == '2'): ?><span style="color:#999999">[已查看]</span><?php else: ?><span style="color: #FF3300">[未查看]</span><?php endif; ?></div>
				<div class="t5"><?php echo $this->_run_modifier($this->_vars['list']['apply_addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
</div>
				<div class="t6"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/17.jpg" width="14" height="13" title="<?php echo $this->_run_modifier($this->_vars['list']['notes'], 'nl2br', 'PHP', 1); ?>
" class="vtip" /></div>	
				<div class="clear"></div>
			</div>
			<?php else: ?>
			<div class="ilist userliststyle">
			    <div class="t1" style="width:450px;"><input name="y_id[]" id="y_id" type="checkbox" value="<?php echo $this->_vars['list']['did']; ?>
" />&nbsp;&nbsp;该职位可能已经被删除，您可以删除本条信息。</div>	
				<div class="clear"></div>
			</div>
			<?php endif; ?>
			<?php endforeach; endif; ?>
			<div class="but">
			   <input type="submit" name="delete" id="submitsave" value="删除所选"  class="but95_35lan" onClick="return confirm('删除后招聘单位将无法通过职位申请栏目找到您，您确定删除吗?')"/>
			</div>
			<?php if ($this->_vars['page']): ?>
			<table border="0" align="center" cellpadding="0" cellspacing="0" class="link_bk">
	          <tr>
	            <td height="50" align="center"> <div class="page link_bk"><?php echo $this->_vars['page']; ?>
</div></td>
	          </tr>
	      </table>
	      <?php endif; ?>
			<?php else: ?>
			<div class="emptytip" style="margin:0 15px;">对不起！没有找到您要的信息！</div>
			<?php endif; ?>
		</form>
		
	  </div>
	</div>
</div>
</div>
<div class="clear"></div>
 <?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("user/footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>
